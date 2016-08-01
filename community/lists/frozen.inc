<div align="center">
<h1><font color="red">This web mail archive is frozen.</font></h1>

<p> This page is part of a frozen web archive of this mailing list.</p>

<p> You can still navigate around this archive, but know that no new mails
have been added to it since July of 2016.</p>

<?php
if ($this_list != "") {
    # 8 Aug 2016 is the ETA for the mail-archives.com to come online
    # with the old mails.
    $t = mktime(0, 0, 0, 8, 8, 2016);

    print("<p><a href=\"https://mail-archive.com/$this_list@lists.open-mpi.org/\">Click here to be taken to the new web archives of this list</a>; it ");
    if (time() > $t) {
        print("includes");
    } else {
        print("will soon include");
    }
    print(" all the mails that are in this frozen archive plus all new mails that have been sent to the list since it was migrated to the new archives.</p>\n");
}
?>
</div>
