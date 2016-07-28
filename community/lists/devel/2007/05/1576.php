<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May 24 09:53:27 2007" -->
<!-- isoreceived="20070524135327" -->
<!-- sent="Thu, 24 May 2007 09:53:12 -0400" -->
<!-- isosent="20070524135312" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] jnysal-openib-wireup branch" -->
<!-- id="5B1FBDB0-936E-40E3-872F-6ADDDCFD376C_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-24 09:53:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1577.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>Previous message:</strong> <a href="1575.php">Ralph H Castain: "Re: [OMPI devel] ORTE registry patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/06/1621.php">Nysal Jan: "Re: [OMPI devel] jnysal-openib-wireup branch"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/06/1621.php">Nysal Jan: "Re: [OMPI devel] jnysal-openib-wireup branch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nysal --
<br>
<p>I was poking through /tmp/jnysal-openib-wireup branch this morning  
<br>
(because I suddenly have a need for btl_openib_if_include and  
<br>
btl_openib_if_exclude) and found two minor problems:
<br>
<p>1. The logic for if_exclude was not correct.  I committed a fix for  
<br>
it.  <a href="https://svn.open-mpi.org/trac/ompi/changeset/14748">https://svn.open-mpi.org/trac/ompi/changeset/14748</a>
<br>
<p>2. I'm a bit confused on a) how the new MCA params mca_num_hcas and  
<br>
map_num_procs_per_hca are supposed to be used and b) what their  
<br>
default values should be.
<br>
<p>2a. I don't quite understand the logic of is_hca_allowed(); I could  
<br>
not get it to work properly.  Specifically, I have 2 machines each  
<br>
with 2 HCAs (mthca0 has 1 port, mthca1 has 2 ports).  If I ran 2  
<br>
procs (regardless of byslot or bynode), is_hca_allowed() would always  
<br>
return false for the 2nd proc.  So I put a temporary override in  
<br>
is_hca_allowed() to simply always return true.  Can you explain how  
<br>
the logic is supposed to work in that function?
<br>
<p>2b. The default values of max_num_hcas and map_num_procs_per_hca are  
<br>
both 1.  Based on my (potentially flawed) understanding of how these  
<br>
MCA params are meant to be used, this is different than the current  
<br>
default behavior.  The current default is that all procs use all  
<br>
ACTIVE ports on all HCAs.  I *think* your new default param values  
<br>
will set each proc to use the ACTIVE ports on exactly one HCA,  
<br>
regardless how many there are in the host.  Did you mean to do that?   
<br>
Also: both values must currently be &gt;=1; should we allow -1 for both  
<br>
of these values, meaning that they can be &quot;infinite&quot; (i.e., based on  
<br>
the number of HCAs in the host)?
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
<li><strong>Next message:</strong> <a href="1577.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>Previous message:</strong> <a href="1575.php">Ralph H Castain: "Re: [OMPI devel] ORTE registry patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/06/1621.php">Nysal Jan: "Re: [OMPI devel] jnysal-openib-wireup branch"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/06/1621.php">Nysal Jan: "Re: [OMPI devel] jnysal-openib-wireup branch"</a>
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
