<?
$subject_val = "Re: [OMPI devel] Open MPI error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 25 15:28:48 2011" -->
<!-- isoreceived="20110425192848" -->
<!-- sent="Mon, 25 Apr 2011 13:28:40 -0600" -->
<!-- isosent="20110425192840" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI error" -->
<!-- id="C741A47C-58D5-493B-87B6-4C528EA02B03_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BANLkTimn8iFdHHXuV-2f+3qTmWiqbCE+2A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Open MPI error<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-25 15:28:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9220.php">Jeff Squyres: "Re: [OMPI devel] Open MPI error"</a>
<li><strong>Previous message:</strong> <a href="9218.php">Kishor Kharbas: "[OMPI devel] Open MPI error"</a>
<li><strong>In reply to:</strong> <a href="9218.php">Kishor Kharbas: "[OMPI devel] Open MPI error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9220.php">Jeff Squyres: "Re: [OMPI devel] Open MPI error"</a>
<li><strong>Reply:</strong> <a href="9220.php">Jeff Squyres: "Re: [OMPI devel] Open MPI error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 25, 2011, at 11:21 AM, Kishor Kharbas wrote:
<br>
<p><span class="quotelev1">&gt; Hello Developers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using Open MPI-1.5.3 for performing experiments with checkpoint and restart.
</span><br>
<span class="quotelev1">&gt; However when the number of nodes is more than 128, restart fails with an segmentation fault.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; After debugging the code, I found that the cause of this error is that variables of type int_8 are used at various places
</span><br>
<span class="quotelev1">&gt; for storing the &quot;id&quot;s of the application to be run on each node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; One example is in orte_odls_base_default_construct_child_list()  in orte/mca/odls/base/odls_base_default_fns.c.
</span><br>
<span class="quotelev1">&gt; Here int8_t *app_idx is used as a pointer array of app_ids of the processes in the job. In my case the app_ids exceed 127 and they are read
</span><br>
<span class="quotelev1">&gt; as a negative numbers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think there are many other places in the code where int8_t is used to hold the application id.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried some tricks like changing configure so that int8_t and uint8_t are no defined, hence int16_t is used instead.
</span><br>
<span class="quotelev1">&gt; But I think the function unpack still expects int8_t, looking at the error which is raised -OPAL dss:unpack: got type 7 when expecting type 8
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can someone provide a solution to this.
</span><br>
<p>Probably won't happen for awhile - this is something peculiar to the restart mechanism. I'll make a note to look at it, but it would be a low priority.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt; Kishor
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9220.php">Jeff Squyres: "Re: [OMPI devel] Open MPI error"</a>
<li><strong>Previous message:</strong> <a href="9218.php">Kishor Kharbas: "[OMPI devel] Open MPI error"</a>
<li><strong>In reply to:</strong> <a href="9218.php">Kishor Kharbas: "[OMPI devel] Open MPI error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9220.php">Jeff Squyres: "Re: [OMPI devel] Open MPI error"</a>
<li><strong>Reply:</strong> <a href="9220.php">Jeff Squyres: "Re: [OMPI devel] Open MPI error"</a>
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
