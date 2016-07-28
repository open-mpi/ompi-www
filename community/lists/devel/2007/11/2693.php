<?
$subject_val = "Re: [OMPI devel] Using ompi_proc_t's proc_name.vpid as Universal rank";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 30 16:58:11 2007" -->
<!-- isoreceived="20071130215811" -->
<!-- sent="Fri, 30 Nov 2007 16:57:31 -0500" -->
<!-- isosent="20071130215731" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Using ompi_proc_t's proc_name.vpid as Universal rank" -->
<!-- id="17E90B3C-2096-42AA-9347-83992906D666_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="OF46117A73.108945B4-ON862573A3.0074F193-862573A3.007729EF_at_us.ibm.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-30 16:57:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2694.php">Jeff Squyres: "[OMPI devel] Another patch for v1.2.5"</a>
<li><strong>Previous message:</strong> <a href="2692.php">Sajjad Tabib: "Re: [OMPI devel] Using ompi_proc_t's proc_name.vpid as Universal rank"</a>
<li><strong>In reply to:</strong> <a href="2692.php">Sajjad Tabib: "Re: [OMPI devel] Using ompi_proc_t's proc_name.vpid as Universal rank"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
MPI_COMM_WORLD rank is exactly the vpid.
<br>
<p>But keep in mind that when you MPI_COMM_SPAWN, they get a new  
<br>
MPI_COMM_WORLD (with ranks that start with 0).  Hence, with the advent  
<br>
of dynamic processes in MPI-2, a process' rank in MPI_COMM_WORLD is no  
<br>
longer unique (which is why OMPI uses more than that internally to  
<br>
tell MPI processes apart).
<br>
<p><p>On Nov 30, 2007, at 4:41 PM, Sajjad Tabib wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the clarification. So, now I am wondering how rank  
</span><br>
<span class="quotelev1">&gt; information regarding processes in MPI_COMM_WORLD are assigned. Is  
</span><br>
<span class="quotelev1">&gt; there a table that stores unique integer values for processess or is  
</span><br>
<span class="quotelev1">&gt; rank assignment done in some other manner?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sajjad Tabib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tim Prins &lt;tprins_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent by: devel-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 11/30/07 07:22 AM
</span><br>
<span class="quotelev1">&gt; Please respond to
</span><br>
<span class="quotelev1">&gt; Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To
</span><br>
<span class="quotelev1">&gt; Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; cc
</span><br>
<span class="quotelev1">&gt; Subject
</span><br>
<span class="quotelev1">&gt; Re: [OMPI devel] Using ompi_proc_t's proc_name.vpid as Universal rank
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Sajjad,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The vpid is not unique. If you do a comm_spawn then the newly launched
</span><br>
<span class="quotelev1">&gt; processes will have a new jobid, and their vpids will start at 0. So  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; whole process name is unique.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, there is talk now of being able to join 2 jobs that were
</span><br>
<span class="quotelev1">&gt; started completely independently. This may lead to the point where a
</span><br>
<span class="quotelev1">&gt; process name is no longer unique, however this work appears to be a  
</span><br>
<span class="quotelev1">&gt; ways
</span><br>
<span class="quotelev1">&gt; out and as far as I know no decisions have been made on it yet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope this helps,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sajjad Tabib wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have a proprietary transport/messaging layer that sits below an  
</span><br>
<span class="quotelev1">&gt; MTL
</span><br>
<span class="quotelev2">&gt; &gt; component. This transport layer requires OpenMPI to assign it a rank
</span><br>
<span class="quotelev2">&gt; &gt; that is unique and specific to that process and will not change from
</span><br>
<span class="quotelev2">&gt; &gt; execution to termination. In a way, I am trying to find a one-one
</span><br>
<span class="quotelev2">&gt; &gt; correspondence between a process's universal rank in OpenMPI and  
</span><br>
<span class="quotelev1">&gt; this
</span><br>
<span class="quotelev2">&gt; &gt; transport layer. I began looking at ompi_proc_t from different  
</span><br>
<span class="quotelev1">&gt; processes
</span><br>
<span class="quotelev2">&gt; &gt; and seemingly found a unique identifier, proc_name.vpid.  
</span><br>
<span class="quotelev1">&gt; Consequently, I
</span><br>
<span class="quotelev2">&gt; &gt; assigned the ranks to each process in my transport layer based on  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev2">&gt; &gt; value of the local vpid of each process.
</span><br>
<span class="quotelev2">&gt; &gt; I have not tested this thoroughly, but it has been working so far.
</span><br>
<span class="quotelev2">&gt; &gt; Although, I would like to make sure that this is a good approach, or
</span><br>
<span class="quotelev2">&gt; &gt; know, at least, whether if there are other ways to do this. I would
</span><br>
<span class="quotelev2">&gt; &gt; appreciate it if you could leave me feedback or give suggestions  
</span><br>
<span class="quotelev1">&gt; on how
</span><br>
<span class="quotelev2">&gt; &gt; to assign universal ranks to a proprietary transport software.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for your help,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sajjad Tabib
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2694.php">Jeff Squyres: "[OMPI devel] Another patch for v1.2.5"</a>
<li><strong>Previous message:</strong> <a href="2692.php">Sajjad Tabib: "Re: [OMPI devel] Using ompi_proc_t's proc_name.vpid as Universal rank"</a>
<li><strong>In reply to:</strong> <a href="2692.php">Sajjad Tabib: "Re: [OMPI devel] Using ompi_proc_t's proc_name.vpid as Universal rank"</a>
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
