<?
$subject_val = "Re: [OMPI devel] MPI_Com_spawn";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 29 10:12:15 2008" -->
<!-- isoreceived="20081029141215" -->
<!-- sent="Wed, 29 Oct 2008 10:12:08 -0400" -->
<!-- isosent="20081029141208" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Com_spawn" -->
<!-- id="1F056959-9DC9-4BD5-AF21-5A9B6443ED03_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="A93B397A-E742-4E37-A945-A7D440EAA49F_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI_Com_spawn<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-29 10:12:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4825.php">Ralph Castain: "Re: [OMPI devel] MPI_Com_spawn"</a>
<li><strong>Previous message:</strong> <a href="4823.php">Jeff Squyres: "Re: [OMPI devel] snprintf vs. sprintf"</a>
<li><strong>In reply to:</strong> <a href="4819.php">Ralph Castain: "Re: [OMPI devel] MPI_Com_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4825.php">Ralph Castain: "Re: [OMPI devel] MPI_Com_spawn"</a>
<li><strong>Reply:</strong> <a href="4825.php">Ralph Castain: "Re: [OMPI devel] MPI_Com_spawn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Ralph, this indeed fixed my problem. However, I run in more  
<br>
troubles ...
<br>
<p>I have a simple application that keep spawning MPI processes, exchange  
<br>
some data and then the children disconnect and vanish. But I keep  
<br>
doing this in a loop ... absolutely legal from the MPI standard  
<br>
perspective. However, with Open MPI trunk I run in two kinds of  
<br>
troubles:
<br>
<p>1. I run out of fds. Apparently the orteds don't close the connections  
<br>
when the children disconnect, and after few iterations I exhaust the  
<br>
available fd, the orted start complaining and everything end up being  
<br>
killed. If I check with lsof I can see the pending fd (in an invalid  
<br>
state) but still attached to the orted.
<br>
<p>2. I tried to be helpful and provide a host file describing the  
<br>
cluster. I even annotate the nodes with he number of slots and max- 
<br>
slots. When we spawn processes we correctly load balance them on the  
<br>
available nodes, but when they finish we do not release the resources.  
<br>
After few iterations we run out of available nodes, and the  
<br>
application exit with the following error:
<br>
--------------------------------------------------------------------------
<br>
There are not enough slots available in the system to satisfy the 2  
<br>
slots
<br>
that were requested by the application:
<br>
&nbsp;&nbsp;&nbsp;./slave
<br>
<p>Either request fewer slots for your application, or make more slots  
<br>
available
<br>
for use.
<br>
--------------------------------------------------------------------------
<br>
<p>However, at this point there is only one MPI process running, the  
<br>
master. All other resources are fully available for the children.
<br>
<p>I would like to get involved in this and help fix the two problems.  
<br>
But I have a hard time figuring out where to start. Any pointers will  
<br>
be welcomed.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Oct 28, 2008, at 10:50 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Done...r19820
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 28, 2008, at 8:37 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, of course it does - the problem is in a sanity check I just  
</span><br>
<span class="quotelev2">&gt;&gt; installed over the weekend.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Easily fixed...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 28, 2008, at 8:33 AM, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I run in troubles with the new IO framework when I spawn a new  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process. The following error message is dumped and the job is  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; aborted.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The requested stdin target is out of range for this job - it points
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to a process rank that is greater than the number of process in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; job.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Specified target: INVALID
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Number of procs: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This could be caused by specifying a negative number for the stdin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; target, or by mistyping the desired rank. Please correct the cmd  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; line
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and try again.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is the new IO framework supposed to support MPI2 dynamics ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  george.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4824/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4825.php">Ralph Castain: "Re: [OMPI devel] MPI_Com_spawn"</a>
<li><strong>Previous message:</strong> <a href="4823.php">Jeff Squyres: "Re: [OMPI devel] snprintf vs. sprintf"</a>
<li><strong>In reply to:</strong> <a href="4819.php">Ralph Castain: "Re: [OMPI devel] MPI_Com_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4825.php">Ralph Castain: "Re: [OMPI devel] MPI_Com_spawn"</a>
<li><strong>Reply:</strong> <a href="4825.php">Ralph Castain: "Re: [OMPI devel] MPI_Com_spawn"</a>
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
