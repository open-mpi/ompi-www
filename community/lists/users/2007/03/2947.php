<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar 29 17:51:38 2007" -->
<!-- isoreceived="20070329215138" -->
<!-- sent="Thu, 29 Mar 2007 17:51:10 -0400" -->
<!-- isosent="20070329215110" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can anybody guide me how to make a openmpi file" -->
<!-- id="C6566742-D460-47C7-ABBE-CB56E80CA3E6_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="2024.128.61.117.200.1175207633.squirrel_at_webmail.cc.gatech.edu" -->
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
<strong>Date:</strong> 2007-03-29 17:51:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2948.php">George Bosilca: "Re: [OMPI users] Measuring MPI message size used by application"</a>
<li><strong>Previous message:</strong> <a href="2946.php">pooja_at_[hidden]: "[OMPI users] Can anybody guide me how to make a openmpi file"</a>
<li><strong>In reply to:</strong> <a href="2946.php">pooja_at_[hidden]: "[OMPI users] Can anybody guide me how to make a openmpi file"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 29, 2007, at 6:33 PM, pooja_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; I am Pooja. I am doing a course project in which I have to make  
</span><br>
<span class="quotelev1">&gt; changes to
</span><br>
<span class="quotelev1">&gt; openmpi code and complie it all over again.I want to know how to  
</span><br>
<span class="quotelev1">&gt; complie
</span><br>
<span class="quotelev1">&gt; openmpi file.I went through the FAQ and over there they have given  
</span><br>
<span class="quotelev1">&gt; some
</span><br>
<span class="quotelev1">&gt; commands to Build openmpi file.But in that it is specified that we  
</span><br>
<span class="quotelev1">&gt; need
</span><br>
<span class="quotelev1">&gt; some configuration file .Can anybody please help me to Make Openmpi  
</span><br>
<span class="quotelev1">&gt; file
</span><br>
<p>I'm not sure what you're asking -- do you have a Subversion checkout  
<br>
of Open MPI?  If you're doing development, I would strongly suggest a  
<br>
SVN checkout (as opposed to modifying a tarball).
<br>
<p>There are instructions on the web site about how to build Open MPI  
<br>
from Subversion: <a href="http://www.open-mpi.org/svn/building.php">http://www.open-mpi.org/svn/building.php</a>.  Generally  
<br>
speaking, if you make a modification to some code, you just invoke  
<br>
&quot;make&quot; and &quot;make install&quot; again to build your new changes and install  
<br>
them.
<br>
<p>There are lots of shortcuts, of course -- re-building the entire tree  
<br>
from the top-level is certainly not always necessary.  But it depends  
<br>
what area of the tree you're working in, etc.  Can you describe more  
<br>
fully what you're doing?
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
<li><strong>Next message:</strong> <a href="2948.php">George Bosilca: "Re: [OMPI users] Measuring MPI message size used by application"</a>
<li><strong>Previous message:</strong> <a href="2946.php">pooja_at_[hidden]: "[OMPI users] Can anybody guide me how to make a openmpi file"</a>
<li><strong>In reply to:</strong> <a href="2946.php">pooja_at_[hidden]: "[OMPI users] Can anybody guide me how to make a openmpi file"</a>
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
