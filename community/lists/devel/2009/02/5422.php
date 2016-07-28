<?
$subject_val = "Re: [OMPI devel] Announcing searchable OMPI source code tree";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb 14 11:24:00 2009" -->
<!-- isoreceived="20090214162400" -->
<!-- sent="Sat, 14 Feb 2009 08:23:18 -0800" -->
<!-- isosent="20090214162318" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Announcing searchable OMPI source code tree" -->
<!-- id="4996EFF6.3080801_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF3606C8-0E41-45CB-84F4-29ACB0404619_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Announcing searchable OMPI source code tree<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-14 11:23:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5423.php">Lisandro Dalcin: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<li><strong>Previous message:</strong> <a href="5421.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20557"</a>
<li><strong>In reply to:</strong> <a href="5419.php">Jeff Squyres: "[OMPI devel] Announcing searchable OMPI source code tree"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Indiana U. has added another service to the Open MPI web site: a 
</span><br>
<span class="quotelev1">&gt; fully  indexed and searchable database of Open MPI source code 
</span><br>
<span class="quotelev1">&gt; trees.   There's a link under &quot;Source Code Access&quot; entitled 
</span><br>
<span class="quotelev1">&gt; &quot;Searchable source  tree&quot; on the OMPI web site that takes you to 
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/source/">https://svn.open-mpi.org/source/</a>   (get the CA cert from 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cs.indiana.edu/Facilities/FAQ/Mail/csci.crt">http://www.cs.indiana.edu/Facilities/FAQ/Mail/csci.crt</a>   to avoid SSL 
</span><br>
<span class="quotelev1">&gt; certificate warnings from your browser).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This site, powered by OpenGrok, is a &quot;wicked fast&quot; searchable 
</span><br>
<span class="quotelev1">&gt; database  of both the Open MPI SVN trunk and v1.3 release branch.
</span><br>
<p>Some cool (IMHO) stuff:
<br>
<p>E.g., search on &quot;mca_btl_sm_send&quot; and get here:
<br>
<a href="https://svn.open-mpi.org/source/xref/ompi_1.3/ompi/mca/btl/sm/btl_sm.c#798">https://svn.open-mpi.org/source/xref/ompi_1.3/ompi/mca/btl/sm/btl_sm.c#798</a>
<br>
<p>But I like embedding such links in notes I have so that I can quickly 
<br>
see the source for something I wrote a note about.  So, you can have 
<br>
&quot;symbolic&quot; links like this (replace line number by function name):
<br>
<a href="https://svn.open-mpi.org/source/xref/ompi_1.3/ompi/mca/btl/sm/btl_sm.c#mca_btl_sm_send">https://svn.open-mpi.org/source/xref/ompi_1.3/ompi/mca/btl/sm/btl_sm.c#mca_btl_sm_send</a>
<br>
Or, refer to a specific rev
<br>
<a href="https://svn.open-mpi.org/source/xref/ompi_1.3/ompi/mca/btl/sm/btl_sm.c?r=20298#798">https://svn.open-mpi.org/source/xref/ompi_1.3/ompi/mca/btl/sm/btl_sm.c?r=20298#798</a>
<br>
(You can't seem to use a #funcname when you specify a rev.)
<br>
<p>Anyhow, you can click in the window to see the definition of something.  
<br>
E.g., at this URL, we see source code that calls MCA_BTL_SM_FIFO_WRITE.  
<br>
We click on it and get taken to the definition of that macro.  (This has 
<br>
limited utility in Open MPI, where so many functions are dynamically 
<br>
defined at run time.  Sigh.)
<br>
<p>Anyhow, much more functional and faster than the trac source browser, IMHO.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5423.php">Lisandro Dalcin: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<li><strong>Previous message:</strong> <a href="5421.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20557"</a>
<li><strong>In reply to:</strong> <a href="5419.php">Jeff Squyres: "[OMPI devel] Announcing searchable OMPI source code tree"</a>
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
