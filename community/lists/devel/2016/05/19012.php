<?
$subject_val = "[OMPI devel] modex getting corrupted";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 21 00:36:15 2016" -->
<!-- isoreceived="20160521043615" -->
<!-- sent="Sat, 21 May 2016 00:36:05 -0400" -->
<!-- isosent="20160521043605" -->
<!-- name="dpchoudh ." -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="[OMPI devel] modex getting corrupted" -->
<!-- id="CAHXxYDg7MomwOWT8VO366qGh30ddgW3qBE0L=zs+ucCkOhf1_Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] modex getting corrupted<br>
<strong>From:</strong> dpchoudh . (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-21 00:36:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19013.php">Paul Hargrove: "[OMPI devel] [1.10.3rc2] OpenBSD build failure"</a>
<li><strong>Previous message:</strong> <a href="19011.php">Ralph Castain: "[OMPI devel] v1.10.3rc2 ready for final testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19019.php">Ralph Castain: "Re: [OMPI devel] modex getting corrupted"</a>
<li><strong>Reply:</strong> <a href="19019.php">Ralph Castain: "Re: [OMPI devel] modex getting corrupted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all
<br>
<p>I have a naive question:
<br>
<p>My 'cluster' consists of two nodes, connected back to back with a
<br>
proprietary link as well as GbE (over a switch).
<br>
I am calling OPAL_MODEX_SEND() and the modex consists of just this:
<br>
<p>struct modex
<br>
{char name[20], unsigned mtu};
<br>
<p>The mtu field is not currently being used. I bzero() the struct and have
<br>
verified that the value being written to the 'name' field (this is similar
<br>
to a PKEY for infiniband; the driver will translate this to a unique
<br>
integer) is correct at the sending end.
<br>
<p>When I do a OPAL_MODEX_RECV(), the value is completely corrupted. However,
<br>
the size of the modex message is still correct (24 bytes)
<br>
What could I be doing wrong? (Both nodes are little endian x86_64 machines)
<br>
<p>Thanks in advance
<br>
Durga
<br>
<p>We learn from history that we never learn from history.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19012/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19013.php">Paul Hargrove: "[OMPI devel] [1.10.3rc2] OpenBSD build failure"</a>
<li><strong>Previous message:</strong> <a href="19011.php">Ralph Castain: "[OMPI devel] v1.10.3rc2 ready for final testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19019.php">Ralph Castain: "Re: [OMPI devel] modex getting corrupted"</a>
<li><strong>Reply:</strong> <a href="19019.php">Ralph Castain: "Re: [OMPI devel] modex getting corrupted"</a>
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
