<?
$subject_val = "Re: [OMPI devel] Using ompi_proc_t's proc_name.vpid as Universal rank";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 30 16:41:51 2007" -->
<!-- isoreceived="20071130214151" -->
<!-- sent="Fri, 30 Nov 2007 15:41:27 -0600" -->
<!-- isosent="20071130214127" -->
<!-- name="Sajjad Tabib" -->
<!-- email="stabib_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Using ompi_proc_t's proc_name.vpid as Universal rank" -->
<!-- id="OF46117A73.108945B4-ON862573A3.0074F193-862573A3.007729EF_at_us.ibm.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47500E92.3000309_at_cs.indiana.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Using ompi_proc_t's proc_name.vpid as Universal rank<br>
<strong>From:</strong> Sajjad Tabib (<em>stabib_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-30 16:41:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2693.php">Jeff Squyres: "Re: [OMPI devel] Using ompi_proc_t's proc_name.vpid as Universal rank"</a>
<li><strong>Previous message:</strong> <a href="2691.php">Gleb Natapov: "Re: [OMPI devel] tmp XRC branches"</a>
<li><strong>In reply to:</strong> <a href="2687.php">Tim Prins: "Re: [OMPI devel] Using ompi_proc_t's proc_name.vpid as Universal rank"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2693.php">Jeff Squyres: "Re: [OMPI devel] Using ompi_proc_t's proc_name.vpid as Universal rank"</a>
<li><strong>Reply:</strong> <a href="2693.php">Jeff Squyres: "Re: [OMPI devel] Using ompi_proc_t's proc_name.vpid as Universal rank"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, 
<br>
<p>Thanks for the clarification. So, now I am wondering how rank information 
<br>
regarding processes in MPI_COMM_WORLD are assigned. Is there a table that 
<br>
stores unique integer values for processess or is rank assignment done in 
<br>
some other manner? 
<br>
<p>Thanks,
<br>
<p>Sajjad Tabib
<br>
<p><p><p><p>Tim Prins &lt;tprins_at_[hidden]&gt; 
<br>
Sent by: devel-bounces_at_[hidden]
<br>
11/30/07 07:22 AM
<br>
Please respond to
<br>
Open MPI Developers &lt;devel_at_[hidden]&gt;
<br>
<p><p>To
<br>
Open MPI Developers &lt;devel_at_[hidden]&gt;
<br>
cc
<br>
<p>Subject
<br>
Re: [OMPI devel] Using ompi_proc_t's proc_name.vpid as Universal rank
<br>
<p><p><p><p><p><p>Hi Sajjad,
<br>
<p>The vpid is not unique. If you do a comm_spawn then the newly launched 
<br>
processes will have a new jobid, and their vpids will start at 0. So the 
<br>
whole process name is unique.
<br>
<p>However, there is talk now of being able to join 2 jobs that were 
<br>
started completely independently. This may lead to the point where a 
<br>
process name is no longer unique, however this work appears to be a ways 
<br>
out and as far as I know no decisions have been made on it yet.
<br>
<p>Hope this helps,
<br>
<p>Tim
<br>
<p>Sajjad Tabib wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a proprietary transport/messaging layer that sits below an MTL 
</span><br>
<span class="quotelev1">&gt; component. This transport layer requires OpenMPI to assign it a rank 
</span><br>
<span class="quotelev1">&gt; that is unique and specific to that process and will not change from 
</span><br>
<span class="quotelev1">&gt; execution to termination. In a way, I am trying to find a one-one 
</span><br>
<span class="quotelev1">&gt; correspondence between a process's universal rank in OpenMPI and this 
</span><br>
<span class="quotelev1">&gt; transport layer. I began looking at ompi_proc_t from different processes 
</span><br>
<p><span class="quotelev1">&gt; and seemingly found a unique identifier, proc_name.vpid. Consequently, I 
</span><br>
<p><span class="quotelev1">&gt; assigned the ranks to each process in my transport layer based on the 
</span><br>
<span class="quotelev1">&gt; value of the local vpid of each process.
</span><br>
<span class="quotelev1">&gt; I have not tested this thoroughly, but it has been working so far. 
</span><br>
<span class="quotelev1">&gt; Although, I would like to make sure that this is a good approach, or 
</span><br>
<span class="quotelev1">&gt; know, at least, whether if there are other ways to do this. I would 
</span><br>
<span class="quotelev1">&gt; appreciate it if you could leave me feedback or give suggestions on how 
</span><br>
<span class="quotelev1">&gt; to assign universal ranks to a proprietary transport software.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for your help,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sajjad Tabib
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2692/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2693.php">Jeff Squyres: "Re: [OMPI devel] Using ompi_proc_t's proc_name.vpid as Universal rank"</a>
<li><strong>Previous message:</strong> <a href="2691.php">Gleb Natapov: "Re: [OMPI devel] tmp XRC branches"</a>
<li><strong>In reply to:</strong> <a href="2687.php">Tim Prins: "Re: [OMPI devel] Using ompi_proc_t's proc_name.vpid as Universal rank"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2693.php">Jeff Squyres: "Re: [OMPI devel] Using ompi_proc_t's proc_name.vpid as Universal rank"</a>
<li><strong>Reply:</strong> <a href="2693.php">Jeff Squyres: "Re: [OMPI devel] Using ompi_proc_t's proc_name.vpid as Universal rank"</a>
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
