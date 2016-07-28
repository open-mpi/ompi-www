<?
$subject_val = "Re: [OMPI devel] add_procs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  5 15:41:01 2009" -->
<!-- isoreceived="20090205204101" -->
<!-- sent="Thu, 5 Feb 2009 15:40:52 -0500" -->
<!-- isosent="20090205204052" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] add_procs" -->
<!-- id="B3ED1306-B1F7-4C0A-B55B-79B879E99C87_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="498B40FA.1080609_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] add_procs<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-05 15:40:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5383.php">Christoph van Wüllen: "Re: [OMPI devel] bug in openmpi-1.3/ompi/mpi/f77/profile/pcart_coords_f.c"</a>
<li><strong>Previous message:</strong> <a href="5381.php">Ralph Castain: "Re: [OMPI devel] add_procs"</a>
<li><strong>In reply to:</strong> <a href="5379.php">Eugene Loh: "[OMPI devel] add_procs"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This functionality has as many chances to be called as any MPI 2  
<br>
dynamics MPI functions. Every time the MPI universe is expanded, once  
<br>
the modex of the new processes is known, add procs is called in order  
<br>
to allow the PML and BTL to update their local view of the MPI universe.
<br>
<p>The code is robust and well tested by a lot of people (please check  
<br>
the maling list about spawn problems). Unfortunately, as you noticed,  
<br>
the current incarnation of sm doesn't support spawn. If there is any  
<br>
changes to be made, adding support for spawn in sm is the direction in  
<br>
which we should look, as sm is the only BTL today that doesn't support  
<br>
dynamic processes.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Feb 5, 2009, at 14:41 , Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; BTLs have &quot;add_procs&quot; functions.  E.g., my own parochial interests  
</span><br>
<span class="quotelev1">&gt; are with the sm BTL and there is a mca_btl_sm_add_procs() function.   
</span><br>
<span class="quotelev1">&gt; I'm trying to get a feel for how likely it is that this function  
</span><br>
<span class="quotelev1">&gt; would be called more than once.  There is code in there to support  
</span><br>
<span class="quotelev1">&gt; the case where it's called multiple times:  e.g., don't just call it  
</span><br>
<span class="quotelev1">&gt; once during MPI_Init, but again during program execution to add more  
</span><br>
<span class="quotelev1">&gt; processes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Maybe we can do this the &quot;multiple choice&quot; method:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A) That code is in there for standard purposes (dynamically added  
</span><br>
<span class="quotelev1">&gt; processes or something?) and is robust and routinely tested.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; B) That code was in there because we had hoped to support this stuff  
</span><br>
<span class="quotelev1">&gt; someday, but I'm not sure if it works.  It's not really tested and  
</span><br>
<span class="quotelev1">&gt; rarely used by our users.  We should clean it up sometime so that  
</span><br>
<span class="quotelev1">&gt; we're sure it's doing what it should.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; C) That code was a fantasy we had when we first started coding this  
</span><br>
<span class="quotelev1">&gt; stuff, and for sure there is no prayer of that stuff working  
</span><br>
<span class="quotelev1">&gt; properly today or any time in the foreseeable future without major  
</span><br>
<span class="quotelev1">&gt; work.  Come to think of it, we'd be doing ourselves a service by  
</span><br>
<span class="quotelev1">&gt; ripping all that stuff out.
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
<li><strong>Next message:</strong> <a href="5383.php">Christoph van Wüllen: "Re: [OMPI devel] bug in openmpi-1.3/ompi/mpi/f77/profile/pcart_coords_f.c"</a>
<li><strong>Previous message:</strong> <a href="5381.php">Ralph Castain: "Re: [OMPI devel] add_procs"</a>
<li><strong>In reply to:</strong> <a href="5379.php">Eugene Loh: "[OMPI devel] add_procs"</a>
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
