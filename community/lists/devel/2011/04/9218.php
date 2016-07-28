<?
$subject_val = "[OMPI devel] Open MPI error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 25 13:21:17 2011" -->
<!-- isoreceived="20110425172117" -->
<!-- sent="Mon, 25 Apr 2011 13:21:11 -0400" -->
<!-- isosent="20110425172111" -->
<!-- name="Kishor Kharbas" -->
<!-- email="kkharba_at_[hidden]" -->
<!-- subject="[OMPI devel] Open MPI error" -->
<!-- id="BANLkTimn8iFdHHXuV-2f+3qTmWiqbCE+2A_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Open MPI error<br>
<strong>From:</strong> Kishor Kharbas (<em>kkharba_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-25 13:21:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9219.php">Ralph Castain: "Re: [OMPI devel] Open MPI error"</a>
<li><strong>Previous message:</strong> <a href="9217.php">George Bosilca: "Re: [OMPI devel] Adaptive or fault-tolerant MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9219.php">Ralph Castain: "Re: [OMPI devel] Open MPI error"</a>
<li><strong>Reply:</strong> <a href="9219.php">Ralph Castain: "Re: [OMPI devel] Open MPI error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Developers,
<br>
<p>I am using Open MPI-1.5.3 for performing experiments with checkpoint and
<br>
restart.
<br>
However when the number of nodes is more than 128, restart fails with an
<br>
segmentation fault.
<br>
<p>After debugging the code, I found that the cause of this error is that
<br>
variables of type int_8 are used at various places
<br>
for storing the &quot;id&quot;s of the application to be run on each node.
<br>
<p>One example is in orte_odls_base_default_construct_child_list()  in
<br>
orte/mca/odls/base/odls_base_default_fns.c.
<br>
Here int8_t *app_idx is used as a pointer array of app_ids of the processes
<br>
in the job. In my case the app_ids exceed 127 and they are read
<br>
as a negative numbers.
<br>
<p>I think there are many other places in the code where int8_t is used to hold
<br>
the application id.
<br>
<p>I tried some tricks like changing configure so that int8_t and uint8_t are
<br>
no defined, hence int16_t is used instead.
<br>
But I think the function unpack still expects int8_t, looking at the error
<br>
which is raised -OPAL dss:unpack: got type 7 when expecting type 8
<br>
<p>Can someone provide a solution to this.
<br>
<p>Thank you.
<br>
Kishor
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9218/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9219.php">Ralph Castain: "Re: [OMPI devel] Open MPI error"</a>
<li><strong>Previous message:</strong> <a href="9217.php">George Bosilca: "Re: [OMPI devel] Adaptive or fault-tolerant MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9219.php">Ralph Castain: "Re: [OMPI devel] Open MPI error"</a>
<li><strong>Reply:</strong> <a href="9219.php">Ralph Castain: "Re: [OMPI devel] Open MPI error"</a>
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
