<?php print "(".$this->getVar("set_item_num")."/".$this->getVar("set_num_items").")<br/>"; ?>
<H3>{{{<unit relativeTo="ca_collections" delimiter="<br/>"><l>^ca_collections.hierarchy.preferred_labels.name%returnAsLink=1%delimiter=_➔_</l></unit>}}}</H3>


{{{<unit relativeTo="ca_collections" delimiter="<br/>"><ifdef code="ca_collections.CollectionNote.NoteContent%[NoteType=abstract]"><b>About the Collection</b>: ^ca_collections.CollectionNote.NoteContent%[NoteType=abstract]<br/><br/></ifdef></unit>}}}
{{{<ifdef code="ca_collections.CollectionDate.collectionDates_text"><b>Date:</b> <unit>^ca_collections.CollectionDate.collectionDates_text</unit></ifdef>}}}<br><br>
{{{<ifcount code="ca_entities" min="1" max="1"><b>Related person/organization: </b></ifcount>}}}
{{{<ifcount code="ca_entities" min="2"><b>Related people/organizations: </b></ifcount>}}}
{{{<unit relativeTo="ca_entities" delimiter=", "><l>^ca_entities.preferred_labels.displayname</l></unit><br/><br/>}}}

<?php print caDetailLink($this->request, _t("VIEW FEATURED RECORD"), '', 'ca_objects',  $this->getVar("object_id"))."</br/><br/>"; ?>