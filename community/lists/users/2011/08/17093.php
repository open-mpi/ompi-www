<?
$subject_val = "Re: [OMPI users] Documentation of MPI Implementation";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 24 09:07:21 2011" -->
<!-- isoreceived="20110824130721" -->
<!-- sent="Wed, 24 Aug 2011 09:07:16 -0400" -->
<!-- isosent="20110824130716" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Documentation of MPI Implementation" -->
<!-- id="B2D277EE-FE13-4E0D-AF81-8A40DE8CC34E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAGrabN6caq0fi-GkqDtSGcvGJcS9PTVP6OvwRdbhvz3K8z6Y6w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Documentation of MPI Implementation<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-24 09:07:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17094.php">Hoang-Vu Dang: "Re: [OMPI users] Documentation of MPI Implementation"</a>
<li><strong>Previous message:</strong> <a href="17092.php">Jeff Squyres: "Re: [OMPI users] Related to project ideas in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="17080.php">Hoang-Vu Dang: "[OMPI users] Documentation of MPI Implementation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17094.php">Hoang-Vu Dang: "Re: [OMPI users] Documentation of MPI Implementation"</a>
<li><strong>Reply:</strong> <a href="17094.php">Hoang-Vu Dang: "Re: [OMPI users] Documentation of MPI Implementation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 23, 2011, at 3:32 AM, Hoang-Vu Dang wrote:
<br>
<p><span class="quotelev1">&gt; Where could I find a detailed documentation about algorithms that has been using in Open MPI ? 
</span><br>
<p>Unfortunately, you probably won't.
<br>
<p><span class="quotelev1">&gt; For example, I would like to answer following questions: how MPI_Algather operation is done? what is the complexity in term of the number of data send/receive given a number of node involved? what is the data structure behind ?. Same as for MPI_Alreduce etc.. 
</span><br>
<p>All of OMPI's collectives are implemented as plugins under the ompi/mca/coll/ tree.  There are several different plugins in that tree -- each one has its own directory (with the exception of &quot;base&quot;, which is glue code for the whole collective algorithm framework).  
<br>
<p>You probably want to look in the &quot;tuned&quot; component for OMPI's current-generation algorithms (to be replaced soon, but that's what's mostly used today).  &quot;tuned&quot; has many different algorithm implementations for each MPI collective, and uses sophisticated run-time checking to determine which to use.
<br>
<p>So the answer to your original query -- how is the MPI_Allgather operation done?  -- is, &quot;it depends&quot; on things like message size, number of peers, etc.  :-)
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17094.php">Hoang-Vu Dang: "Re: [OMPI users] Documentation of MPI Implementation"</a>
<li><strong>Previous message:</strong> <a href="17092.php">Jeff Squyres: "Re: [OMPI users] Related to project ideas in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="17080.php">Hoang-Vu Dang: "[OMPI users] Documentation of MPI Implementation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17094.php">Hoang-Vu Dang: "Re: [OMPI users] Documentation of MPI Implementation"</a>
<li><strong>Reply:</strong> <a href="17094.php">Hoang-Vu Dang: "Re: [OMPI users] Documentation of MPI Implementation"</a>
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
