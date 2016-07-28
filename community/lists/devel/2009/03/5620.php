<?
$subject_val = "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 11 12:20:21 2009" -->
<!-- isoreceived="20090311162021" -->
<!-- sent="Wed, 11 Mar 2009 08:19:41 -0800" -->
<!-- isosent="20090311161941" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco" -->
<!-- id="49B7E49D.2000206_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DC56BB17-CEBE-495E-B289-0E7F2B7DF686_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-11 12:19:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5621.php">Ralph Castain: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<li><strong>Previous message:</strong> <a href="5619.php">Terry Dontje: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<li><strong>In reply to:</strong> <a href="5617.php">Ralph Castain: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5632.php">Jeff Squyres: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<li><strong>Reply:</strong> <a href="5632.php">Jeff Squyres: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Could be nobody is saying anything...but I would be surprised if - 
</span><br>
<span class="quotelev1">&gt; nobody- barked at a segfault during startup.
</span><br>
<p>Well, if it segfaulted during startup, someone's first reaction would 
<br>
probably be, &quot;Oh really?&quot;  They would try again, have success, attribute 
<br>
to cosmic rays, and move on.  But, yes, it is presumably rare 
<br>
(reasonably measured in parts per million), and the failure is early and 
<br>
obvious.  And in code that is due to change very soon.
<br>
<p>I don't understand what's going on, but I guess each process is calling 
<br>
sm_btl_first_time_init(), during which it initializes its own shm_bases 
<br>
value, FIFOs, and shm_fifo pointer.  If a remote process saw those 
<br>
memory operations in that order, then initialization of the shm_fifo 
<br>
pointer would be an indicator that the rest of the data structures had 
<br>
been initialized.  But there are no memory barriers between those 
<br>
operations to order them.  So, perhaps testing the shm_fifo pointer 
<br>
doesn't really mean much.  I don't know enough about memory coherency to 
<br>
know.
<br>
<p>I think Terry has seen 
<br>
<a href="https://svn.open-mpi.org/source/xref/ompi_1.3/ompi/mca/btl/sm/btl_sm.c?r=20298#520">https://svn.open-mpi.org/source/xref/ompi_1.3/ompi/mca/btl/sm/btl_sm.c?r=20298#520</a> 
<br>
produce a wild &quot;diff&quot; value (between local and remote &quot;bases&quot;), even 
<br>
though it was supposed to be 0.  I could see this happening if one saw 
<br>
the updates to the remote bases and shm_fifo values in the &quot;wrong&quot; order.
<br>
<p>Jeff said he saw a problem at 
<br>
<a href="https://svn.open-mpi.org/source/xref/ompi_1.3/ompi/mca/btl/sm/btl_sm.c?r=20298#529">https://svn.open-mpi.org/source/xref/ompi_1.3/ompi/mca/btl/sm/btl_sm.c?r=20298#529</a> 
<br>
.  He says he sees reasonable values for .fifo[j][...], so this would be 
<br>
harder to explain.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5621.php">Ralph Castain: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<li><strong>Previous message:</strong> <a href="5619.php">Terry Dontje: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<li><strong>In reply to:</strong> <a href="5617.php">Ralph Castain: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5632.php">Jeff Squyres: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<li><strong>Reply:</strong> <a href="5632.php">Jeff Squyres: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
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
