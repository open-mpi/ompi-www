<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri May 26 07:18:48 2006" -->
<!-- isoreceived="20060526111848" -->
<!-- sent="Fri, 26 May 2006 07:18:41 -0400" -->
<!-- isosent="20060526111841" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help regarding send/recv code" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF8FD5FA_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Help regarding send/recv code" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-26 07:18:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1313.php">Terry Reeves: "Re: [OMPI users] Fortran support (g95) not installing"</a>
<li><strong>Previous message:</strong> <a href="1311.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Default configure options"</a>
<li><strong>Maybe in reply to:</strong> <a href="1255.php">Mahesh Barve: "[OMPI users] Help regarding send/recv code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1314.php">John Robinson: "Re: [OMPI users] Help regarding send/recv code"</a>
<li><strong>Reply:</strong> <a href="1314.php">John Robinson: "Re: [OMPI users] Help regarding send/recv code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Open MPI is based on a component architecture, where plugins are used
<br>
for various types of back-end functionality.
<br>
<p>For MPI point-to-point communication, there are three types of plugins
<br>
that are used:
<br>
<p>- pml: Point to Point Messaging Layer (what is directly invoked behind
<br>
MPI_SEND and friends).  This layer understands MPI semantics.
<br>
- btl: Byte Transfer Layer (lowest layer &quot;network driver&quot; for
<br>
communicating across specific networks).  This layer is completely
<br>
MPI-agnostic; it just pushes bytes between endpoints (usually
<br>
processes).
<br>
- bml: BTL Management Layer (for loading, unloading, and generally
<br>
run-time managing multiple BTL plugins).
<br>
<p>Note that previous generations of Open MPI used &quot;ptl&quot; plugins instead of
<br>
&quot;btl&quot; plugins.
<br>
<p>I would suggest reading the &quot;Open MPI: A Flexible High Performance MPI&quot;
<br>
paper on the Open MPI web site (see the &quot;Publications&quot; section) to get
<br>
an overview of the OB1 pml plugin.  It describes the basis and top-level
<br>
design of how the pml, bml, and btls interact at run-time.  Also read
<br>
&quot;InfiniBand Scalability in Open MPI&quot; (also in the publications section).
<br>
It is much more recent and, although somewhat IB-specific, also gives a
<br>
good overview of how things work.  Finally, look at the MPI Developer's
<br>
Workshop slides.  They probably provide the best description of what is
<br>
happening for point-to-point messaging (there's whole sections devoted
<br>
to this).
<br>
<p>If you simply want to implement a new network driver (e.g., raw
<br>
ethernet), you will want to write a new BTL plugin.  If you want to play
<br>
with various scheduling policies, you probably want to modify / write a
<br>
new PML plugin.  This code is not well documented other than comments in
<br>
the code and the description of the plugin interfaces; your best bet is
<br>
to ask questions here on the mailing list.
<br>
<p>I strongly recommend working with a Subversion checkout -- things have
<br>
changed since the 1.0 release.  See <a href="http://www.open-mpi.org/svn/">http://www.open-mpi.org/svn/</a> for
<br>
details on getting a subversion checkout.
<br>
<p>Within the code base, you'll be working within the ompi/ tree (the MPI
<br>
layer).  You'll find the MPI C API bindings in ompi/mpi/c/*.c (e.g.,
<br>
MPI_SEND is in ompi/mpi/c/send.c).  Also in ompi/ is the mca/ directory
<br>
which, in turn, has subdirectories for each kind of plugin (a.k.a.
<br>
&quot;frameworks&quot;), so you'll see subdirectories for pml/ and bml/ and btl/.
<br>
In each framework's directory are subdirectories for each plugin (a.k.a.
<br>
&quot;components&quot;).  So you'll see ompi/mca/pml/ob1 (code for the ob1 PML
<br>
plugin), ompi/mca/bml/r2 (code for the r2 BML plugin), ompi/mca/btl/tcp
<br>
(code for the tcp BTL plugin), etc.
<br>
<p>This is probably enough to get you started.  Let us know what your next
<br>
questions are.
<br>
<p><p><p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Mahesh Barve
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, May 23, 2006 1:24 AM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Help regarding send/recv code
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;  I am a novice to openmpi. Just managed to get openmpi
</span><br>
<span class="quotelev1">&gt; running on my system. 
</span><br>
<span class="quotelev1">&gt;  I would like to modify the code for send and recv.
</span><br>
<span class="quotelev1">&gt; The target lower level device will be ethernet and
</span><br>
<span class="quotelev1">&gt; infiniband. I would like to know the files/functions 
</span><br>
<span class="quotelev1">&gt; to look for. Could you please guide me in this. 
</span><br>
<span class="quotelev1">&gt;  thanks,
</span><br>
<span class="quotelev1">&gt; -Mahesh 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; __________________________________________________
</span><br>
<span class="quotelev1">&gt; Do You Yahoo!?
</span><br>
<span class="quotelev1">&gt; Tired of spam?  Yahoo! Mail has the best spam protection around 
</span><br>
<span class="quotelev1">&gt; <a href="http://mail.yahoo.com">http://mail.yahoo.com</a> 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1313.php">Terry Reeves: "Re: [OMPI users] Fortran support (g95) not installing"</a>
<li><strong>Previous message:</strong> <a href="1311.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Default configure options"</a>
<li><strong>Maybe in reply to:</strong> <a href="1255.php">Mahesh Barve: "[OMPI users] Help regarding send/recv code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1314.php">John Robinson: "Re: [OMPI users] Help regarding send/recv code"</a>
<li><strong>Reply:</strong> <a href="1314.php">John Robinson: "Re: [OMPI users] Help regarding send/recv code"</a>
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
