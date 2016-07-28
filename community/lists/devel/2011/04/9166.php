<?
$subject_val = "Re: [OMPI devel] Add child to another parent.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 13 10:32:39 2011" -->
<!-- isoreceived="20110413143239" -->
<!-- sent="Wed, 13 Apr 2011 16:32:34 +0200" -->
<!-- isosent="20110413143234" -->
<!-- name="Hugo Meyer" -->
<!-- email="meyer.hugo_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Add child to another parent." -->
<!-- id="BANLkTimQBf=TrDSvc7Gg8nwRLv0Dbmm+sg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D2F6941E-B71A-4D60-B617-4B4D15E4644B_at_open-mpi.org" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> Re: [OMPI devel] Add child to another parent.<br>
<strong>From:</strong> Hugo Meyer (<em>meyer.hugo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-13 10:32:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9167.php">Rolf vandeVaart: "[OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<li><strong>Previous message:</strong> <a href="9165.php">Andriy Gapon: "[OMPI devel] problem with absent L3 on AMD CPU"</a>
<li><strong>In reply to:</strong> <a href="9164.php">Ralph Castain: "Re: [OMPI devel] Add child to another parent."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When the proc restarts, it calls orte_routed.init_routes. If you look in
<br>
routed cm, you should see a call to &quot;register_sync&quot; - this is where the proc
<br>
sends a message to the local daemon, allowing it to &quot;learn&quot; the port/address
<br>
where the proc resides.
<br>
<p><p>I've done this. I had a problem because when i called init_routes, i was
<br>
setting only the* orte_process_info.my_daemon* value to the new one, but i
<br>
forgot to set the *orte_process_info.my_daemon_uri. *So when in init_routes
<br>
the *orte_rml_base_parse_uris *was called this resets the value to the old
<br>
daemon, but now that's ok.
<br>
<p>But i've got a little question about the sync. This allows the local daemon
<br>
to learn about the new proc, but the other procs also learn about this? I
<br>
mean, what happens if someone try to send a message to the restored process?
<br>
This message is sent to his new location, or i will have to do something
<br>
else to make this known to the others?
<br>
<p>Thanks a lot for all your help.
<br>
<p>Best regards.
<br>
<p>Hugo
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9166/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9167.php">Rolf vandeVaart: "[OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<li><strong>Previous message:</strong> <a href="9165.php">Andriy Gapon: "[OMPI devel] problem with absent L3 on AMD CPU"</a>
<li><strong>In reply to:</strong> <a href="9164.php">Ralph Castain: "Re: [OMPI devel] Add child to another parent."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
