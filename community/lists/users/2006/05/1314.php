<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri May 26 09:31:40 2006" -->
<!-- isoreceived="20060526133140" -->
<!-- sent="Fri, 26 May 2006 09:31:30 -0400" -->
<!-- isosent="20060526133130" -->
<!-- name="John Robinson" -->
<!-- email="jr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help regarding send/recv code" -->
<!-- id="44770332.70100_at_vertica.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C835B9C9CB0F1C4E9DA48913C9E8F8AF8FD5FA_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>From:</strong> John Robinson (<em>jr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-26 09:31:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1315.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Help regarding send/recv code"</a>
<li><strong>Previous message:</strong> <a href="1313.php">Terry Reeves: "Re: [OMPI users] Fortran support (g95) not installing"</a>
<li><strong>In reply to:</strong> <a href="1312.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Help regarding send/recv code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1315.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Help regarding send/recv code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>How about writing applications that use the OMPI plugins as-is?  Suppose 
<br>
I want to write an application that makes use of generic byte-movement 
<br>
operations.  Is it feasible to write my applicaiton to use a btl plugin?
<br>
<p>- my apologies in advance if this is well covered in the docs you 
<br>
mention - just slap me down ;-).
<br>
<p>thanks,
<br>
/jr
<br>
<pre>
---
Jeff Squyres (jsquyres) wrote:
&gt; Open MPI is based on a component architecture, where plugins are used
&gt; for various types of back-end functionality.
&gt; 
&gt; For MPI point-to-point communication, there are three types of plugins
&gt; that are used:
&gt; 
&gt; - pml: Point to Point Messaging Layer (what is directly invoked behind
&gt; MPI_SEND and friends).  This layer understands MPI semantics.
&gt; - btl: Byte Transfer Layer (lowest layer &quot;network driver&quot; for
&gt; communicating across specific networks).  This layer is completely
&gt; MPI-agnostic; it just pushes bytes between endpoints (usually
&gt; processes).
&gt; - bml: BTL Management Layer (for loading, unloading, and generally
&gt; run-time managing multiple BTL plugins).
&gt; 
&gt; Note that previous generations of Open MPI used &quot;ptl&quot; plugins instead of
&gt; &quot;btl&quot; plugins.
&gt; 
&gt; I would suggest reading the &quot;Open MPI: A Flexible High Performance MPI&quot;
&gt; paper on the Open MPI web site (see the &quot;Publications&quot; section) to get
&gt; an overview of the OB1 pml plugin.  It describes the basis and top-level
&gt; design of how the pml, bml, and btls interact at run-time.  Also read
&gt; &quot;InfiniBand Scalability in Open MPI&quot; (also in the publications section).
&gt; It is much more recent and, although somewhat IB-specific, also gives a
&gt; good overview of how things work.  Finally, look at the MPI Developer's
&gt; Workshop slides.  They probably provide the best description of what is
&gt; happening for point-to-point messaging (there's whole sections devoted
&gt; to this).
&gt; 
&gt; If you simply want to implement a new network driver (e.g., raw
&gt; ethernet), you will want to write a new BTL plugin.  If you want to play
&gt; with various scheduling policies, you probably want to modify / write a
&gt; new PML plugin.  This code is not well documented other than comments in
&gt; the code and the description of the plugin interfaces; your best bet is
&gt; to ask questions here on the mailing list.
&gt; 
&gt; I strongly recommend working with a Subversion checkout -- things have
&gt; changed since the 1.0 release.  See <a href="http://www.open-mpi.org/svn/">http://www.open-mpi.org/svn/</a> for
&gt; details on getting a subversion checkout.
&gt; 
&gt; Within the code base, you'll be working within the ompi/ tree (the MPI
&gt; layer).  You'll find the MPI C API bindings in ompi/mpi/c/*.c (e.g.,
&gt; MPI_SEND is in ompi/mpi/c/send.c).  Also in ompi/ is the mca/ directory
&gt; which, in turn, has subdirectories for each kind of plugin (a.k.a.
&gt; &quot;frameworks&quot;), so you'll see subdirectories for pml/ and bml/ and btl/.
&gt; In each framework's directory are subdirectories for each plugin (a.k.a.
&gt; &quot;components&quot;).  So you'll see ompi/mca/pml/ob1 (code for the ob1 PML
&gt; plugin), ompi/mca/bml/r2 (code for the r2 BML plugin), ompi/mca/btl/tcp
&gt; (code for the tcp BTL plugin), etc.
&gt; 
&gt; This is probably enough to get you started.  Let us know what your next
&gt; questions are.
&gt; 
&gt; 
&gt; 
&gt; 
&gt;&gt;-----Original Message-----
&gt;&gt;From: users-bounces_at_[hidden] 
&gt;&gt;[mailto:users-bounces_at_[hidden]] On Behalf Of Mahesh Barve
&gt;&gt;Sent: Tuesday, May 23, 2006 1:24 AM
&gt;&gt;To: users_at_[hidden]
&gt;&gt;Subject: [OMPI users] Help regarding send/recv code
&gt;&gt;
&gt;&gt;Hi,
&gt;&gt; I am a novice to openmpi. Just managed to get openmpi
&gt;&gt;running on my system. 
&gt;&gt; I would like to modify the code for send and recv.
&gt;&gt;The target lower level device will be ethernet and
&gt;&gt;infiniband. I would like to know the files/functions 
&gt;&gt;to look for. Could you please guide me in this. 
&gt;&gt; thanks,
&gt;&gt;-Mahesh 
&gt;&gt; 
&gt;&gt;
&gt;&gt;
&gt;&gt;__________________________________________________
&gt;&gt;Do You Yahoo!?
&gt;&gt;Tired of spam?  Yahoo! Mail has the best spam protection around 
&gt;&gt;<a href="http://mail.yahoo.com">http://mail.yahoo.com</a> 
&gt;&gt;_______________________________________________
&gt;&gt;users mailing list
&gt;&gt;users_at_[hidden]
&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;
&gt; 
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1315.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Help regarding send/recv code"</a>
<li><strong>Previous message:</strong> <a href="1313.php">Terry Reeves: "Re: [OMPI users] Fortran support (g95) not installing"</a>
<li><strong>In reply to:</strong> <a href="1312.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Help regarding send/recv code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1315.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Help regarding send/recv code"</a>
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
