<?
$subject_val = "[OMPI devel] v1.3 RM: need a ruling";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  9 22:24:29 2008" -->
<!-- isoreceived="20080710022429" -->
<!-- sent="Wed, 9 Jul 2008 21:49:39 -0400" -->
<!-- isosent="20080710014939" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] v1.3 RM: need a ruling" -->
<!-- id="FB926456-A40A-47C1-BFAB-57612C50000A_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] v1.3 RM: need a ruling<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-09 21:49:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4295.php">Terry Dontje: "Re: [OMPI devel] IOF repair"</a>
<li><strong>Previous message:</strong> <a href="4293.php">Jeff Squyres: "Re: [OMPI devel] IOF repair"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4302.php">Brad Benton: "Re: [OMPI devel] v1.3 RM: need a ruling"</a>
<li><strong>Reply:</strong> <a href="4302.php">Brad Benton: "Re: [OMPI devel] v1.3 RM: need a ruling"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
v1.3 RMs: Due to some recent work, the MCA parameter  
<br>
mpi_paffinity_alone disappeared -- it was moved and renamed to be  
<br>
opal_paffinity_alone.  This is Bad because we have a lot of historical  
<br>
precent based on the MCA param name &quot;mpi_paffinity_alone&quot; (FAQ, PPT  
<br>
presentations, e-mails on public lists, etc.).  So it needed to be  
<br>
restored for v1.3.  I just noticed that I hadn't opened a ticket on  
<br>
this -- sorry -- I opened #1383 tonight.
<br>
<p>For a variety of reasons described in the commit message r1383, Lenny  
<br>
and I first decided that it would be best to fix this problem by the  
<br>
functionality committed in r18770 (have the ability to find out where  
<br>
an MCA parameter was set).  This would allow us to register two MCA  
<br>
params: mpi_paffinity_alone and opal_paffinity_alone, and generally do  
<br>
the Right Thing (because we could then tell if a user had set a value  
<br>
or whether it was a default MCA param value).  This functionality will  
<br>
also be useful in the openib BTL, where there is a blend of MCA  
<br>
parameters and INI file parameters.
<br>
<p>However, after doing that, it seemed like only a few more steps to  
<br>
implement an overall better solution: implement &quot;synonyms&quot; for MCA  
<br>
parameters.  I.e., register the name &quot;mpi_paffinity_alone&quot; as a  
<br>
synonym for opal_paffinity_alone.  Along the way, it was trivial to  
<br>
add a &quot;deprecated&quot; flag for MCA parameters that we no longer want to  
<br>
use anymore (this deprecated flag is also useful in the OB1 PML and  
<br>
openib BTL).
<br>
<p>So to fix a problem that needed to be fixed for v1.3 (restore the MCA  
<br>
parameter &quot;mpi_paffinity_alone&quot;), I ended up implementing new  
<br>
functionality.
<br>
<p>Can this go into v1.3, or do we need to implement some kind of  
<br>
alternate fix?  (I admit to not having thought through what it would  
<br>
take to fix without the new MCA parameter functionality -- it might be  
<br>
kinda wonky)
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4295.php">Terry Dontje: "Re: [OMPI devel] IOF repair"</a>
<li><strong>Previous message:</strong> <a href="4293.php">Jeff Squyres: "Re: [OMPI devel] IOF repair"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4302.php">Brad Benton: "Re: [OMPI devel] v1.3 RM: need a ruling"</a>
<li><strong>Reply:</strong> <a href="4302.php">Brad Benton: "Re: [OMPI devel] v1.3 RM: need a ruling"</a>
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
