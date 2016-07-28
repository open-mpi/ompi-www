<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 13 20:49:45 2007" -->
<!-- isoreceived="20070614004945" -->
<!-- sent="Wed, 13 Jun 2007 20:49:28 -0400" -->
<!-- isosent="20070614004928" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] openib connection semantics" -->
<!-- id="8C5FF547-D315-4C61-A45E-18D321B9171E_at_cisco.com" -->
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
<strong>Date:</strong> 2007-06-13 20:49:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1709.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<li><strong>Previous message:</strong> <a href="1707.php">Gil Bloch: "Re: [OMPI devel] openib coord teleconf"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gleb's post earlier today inspired me to [finally] work on the  
<br>
modularizing the openib btl connection semantics.  We need this to  
<br>
add the RDMA CM support anyway, and it seemed like a natural time to  
<br>
actually start something on it.  I used Gleb's patch as a starting  
<br>
point.
<br>
<p>The idea is to separate out the mechanisms used to make OF  
<br>
connections from btl_openib_endpoint.[ch] by moving them into  
<br>
individual component-like .c files (we've discussed this idea off- 
<br>
list before).  Hence, there's one source file for OOB-based  
<br>
connections and another source file for RDMA CM-based connections (I  
<br>
anticipate another for appletalk someday, and perhaps pidgeonnet,  
<br>
too).  There's no dlopen or any &quot;real&quot; component stuff, but the  
<br>
functionality is accessed through function pointers so you can switch  
<br>
between them at run time (think of it as &quot;components-lite&quot;).  The  
<br>
RDMA CM stuff will be an empty shell at the moment -- to be filled in  
<br>
later.
<br>
<p>I'm still working through the abstractions and will commit everything  
<br>
on a tmp branch shortly (i.e., Gleb's work plus this new stuff).   
<br>
There are 2 main ideas:
<br>
<p>1. At the beginning of time, the main openib btl component calls the  
<br>
connection wireup black box and says, &quot;Whenever you finish creating  
<br>
connection requested on behalf of a remote peer, call function X.&quot;
<br>
<p>2. Whenever the main openib btl wants to start an outgoing  
<br>
connection, it calls the wireup black box and says, &quot;Create a  
<br>
connection to this remote peer; when you're done creating the  
<br>
connection, call function Y.&quot;
<br>
<p>Selection between which wireup scheme to use (oob vs. rdma_cm) will  
<br>
initially be quite stupid: a simple user-specified MCA parameter  
<br>
defaulting to &quot;oob&quot;.  Perhaps the selection can be something more  
<br>
intelligent someday.  The wireup schemes can, themselves, export MCA  
<br>
parameters if they want to (I don't know what RDMA CM's requirements  
<br>
will be).
<br>
<p>Galen's BSRQ stuff has dibs on merging into the trunk because a) he  
<br>
started first and b) he asked today.  So if all goes well, I  
<br>
anticipate this stuff will come in to the trunk after Galen's,  
<br>
potentially within a week or two.
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
<li><strong>Next message:</strong> <a href="1709.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<li><strong>Previous message:</strong> <a href="1707.php">Gil Bloch: "Re: [OMPI devel] openib coord teleconf"</a>
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
