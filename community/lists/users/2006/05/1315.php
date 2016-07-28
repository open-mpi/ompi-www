<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri May 26 09:37:52 2006" -->
<!-- isoreceived="20060526133752" -->
<!-- sent="Fri, 26 May 2006 09:37:41 -0400" -->
<!-- isosent="20060526133741" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help regarding send/recv code" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF8FD679_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>Date:</strong> 2006-05-26 09:37:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1316.php">George Bosilca: "Re: [OMPI users] Thread Safety"</a>
<li><strong>Previous message:</strong> <a href="1314.php">John Robinson: "Re: [OMPI users] Help regarding send/recv code"</a>
<li><strong>Maybe in reply to:</strong> <a href="1255.php">Mahesh Barve: "[OMPI users] Help regarding send/recv code"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No worries - these are good questions.  :-) 
<br>
<p>Yes, it is very much our intent to allow these generic byte-transfer
<br>
plugins to be used by things other than MPI.  MPI is currently the focus
<br>
and is what HPC is using *today* (and probably for quite a long time --
<br>
oodles of today's applications will be tomorrow's legacy application).
<br>
But *tomorrow*, who knows what the favorite programming genre will be?
<br>
UPC?  CoArray Fortran?  ...?
<br>
<p>The intent of the specific layering of OPAL, ORTE, and OMPI was such
<br>
that one could build other transport APIs on top of the fundamentals
<br>
that we have created.  Hence, you could have JPI (John's Passing
<br>
Interface) implemented on top of ORTE/OPAL and re-use the BMLs/BTLs,
<br>
etc.  
<br>
<p>That being said, the configure/build system is not well setup (yet) to
<br>
do this, meaning that you'll still need to build the whole MPI layer to
<br>
get the BMLs/BTLs.  Hence, this &quot;build other things on top of the
<br>
high-speed fundamentals in the OMPI layer&quot; is goal that hasn't yet been
<br>
realized.  But it's definitely in the roadmap.
<br>
<p><p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of John Robinson
</span><br>
<span class="quotelev1">&gt; Sent: Friday, May 26, 2006 9:32 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Help regarding send/recv code
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How about writing applications that use the OMPI plugins 
</span><br>
<span class="quotelev1">&gt; as-is?  Suppose 
</span><br>
<span class="quotelev1">&gt; I want to write an application that makes use of generic 
</span><br>
<span class="quotelev1">&gt; byte-movement 
</span><br>
<span class="quotelev1">&gt; operations.  Is it feasible to write my applicaiton to use a 
</span><br>
<span class="quotelev1">&gt; btl plugin?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - my apologies in advance if this is well covered in the docs you 
</span><br>
<span class="quotelev1">&gt; mention - just slap me down ;-).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks,
</span><br>
<span class="quotelev1">&gt; /jr
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI is based on a component architecture, where 
</span><br>
<span class="quotelev1">&gt; plugins are used
</span><br>
<span class="quotelev2">&gt; &gt; for various types of back-end functionality.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; For MPI point-to-point communication, there are three types 
</span><br>
<span class="quotelev1">&gt; of plugins
</span><br>
<span class="quotelev2">&gt; &gt; that are used:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; - pml: Point to Point Messaging Layer (what is directly 
</span><br>
<span class="quotelev1">&gt; invoked behind
</span><br>
<span class="quotelev2">&gt; &gt; MPI_SEND and friends).  This layer understands MPI semantics.
</span><br>
<span class="quotelev2">&gt; &gt; - btl: Byte Transfer Layer (lowest layer &quot;network driver&quot; for
</span><br>
<span class="quotelev2">&gt; &gt; communicating across specific networks).  This layer is completely
</span><br>
<span class="quotelev2">&gt; &gt; MPI-agnostic; it just pushes bytes between endpoints (usually
</span><br>
<span class="quotelev2">&gt; &gt; processes).
</span><br>
<span class="quotelev2">&gt; &gt; - bml: BTL Management Layer (for loading, unloading, and generally
</span><br>
<span class="quotelev2">&gt; &gt; run-time managing multiple BTL plugins).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Note that previous generations of Open MPI used &quot;ptl&quot; 
</span><br>
<span class="quotelev1">&gt; plugins instead of
</span><br>
<span class="quotelev2">&gt; &gt; &quot;btl&quot; plugins.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I would suggest reading the &quot;Open MPI: A Flexible High 
</span><br>
<span class="quotelev1">&gt; Performance MPI&quot;
</span><br>
<span class="quotelev2">&gt; &gt; paper on the Open MPI web site (see the &quot;Publications&quot; 
</span><br>
<span class="quotelev1">&gt; section) to get
</span><br>
<span class="quotelev2">&gt; &gt; an overview of the OB1 pml plugin.  It describes the basis 
</span><br>
<span class="quotelev1">&gt; and top-level
</span><br>
<span class="quotelev2">&gt; &gt; design of how the pml, bml, and btls interact at run-time.  
</span><br>
<span class="quotelev1">&gt; Also read
</span><br>
<span class="quotelev2">&gt; &gt; &quot;InfiniBand Scalability in Open MPI&quot; (also in the 
</span><br>
<span class="quotelev1">&gt; publications section).
</span><br>
<span class="quotelev2">&gt; &gt; It is much more recent and, although somewhat IB-specific, 
</span><br>
<span class="quotelev1">&gt; also gives a
</span><br>
<span class="quotelev2">&gt; &gt; good overview of how things work.  Finally, look at the MPI 
</span><br>
<span class="quotelev1">&gt; Developer's
</span><br>
<span class="quotelev2">&gt; &gt; Workshop slides.  They probably provide the best 
</span><br>
<span class="quotelev1">&gt; description of what is
</span><br>
<span class="quotelev2">&gt; &gt; happening for point-to-point messaging (there's whole 
</span><br>
<span class="quotelev1">&gt; sections devoted
</span><br>
<span class="quotelev2">&gt; &gt; to this).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; If you simply want to implement a new network driver (e.g., raw
</span><br>
<span class="quotelev2">&gt; &gt; ethernet), you will want to write a new BTL plugin.  If you 
</span><br>
<span class="quotelev1">&gt; want to play
</span><br>
<span class="quotelev2">&gt; &gt; with various scheduling policies, you probably want to 
</span><br>
<span class="quotelev1">&gt; modify / write a
</span><br>
<span class="quotelev2">&gt; &gt; new PML plugin.  This code is not well documented other 
</span><br>
<span class="quotelev1">&gt; than comments in
</span><br>
<span class="quotelev2">&gt; &gt; the code and the description of the plugin interfaces; your 
</span><br>
<span class="quotelev1">&gt; best bet is
</span><br>
<span class="quotelev2">&gt; &gt; to ask questions here on the mailing list.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I strongly recommend working with a Subversion checkout -- 
</span><br>
<span class="quotelev1">&gt; things have
</span><br>
<span class="quotelev2">&gt; &gt; changed since the 1.0 release.  See <a href="http://www.open-mpi.org/svn/">http://www.open-mpi.org/svn/</a> for
</span><br>
<span class="quotelev2">&gt; &gt; details on getting a subversion checkout.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Within the code base, you'll be working within the ompi/ 
</span><br>
<span class="quotelev1">&gt; tree (the MPI
</span><br>
<span class="quotelev2">&gt; &gt; layer).  You'll find the MPI C API bindings in ompi/mpi/c/*.c (e.g.,
</span><br>
<span class="quotelev2">&gt; &gt; MPI_SEND is in ompi/mpi/c/send.c).  Also in ompi/ is the 
</span><br>
<span class="quotelev1">&gt; mca/ directory
</span><br>
<span class="quotelev2">&gt; &gt; which, in turn, has subdirectories for each kind of plugin (a.k.a.
</span><br>
<span class="quotelev2">&gt; &gt; &quot;frameworks&quot;), so you'll see subdirectories for pml/ and 
</span><br>
<span class="quotelev1">&gt; bml/ and btl/.
</span><br>
<span class="quotelev2">&gt; &gt; In each framework's directory are subdirectories for each 
</span><br>
<span class="quotelev1">&gt; plugin (a.k.a.
</span><br>
<span class="quotelev2">&gt; &gt; &quot;components&quot;).  So you'll see ompi/mca/pml/ob1 (code for the ob1 PML
</span><br>
<span class="quotelev2">&gt; &gt; plugin), ompi/mca/bml/r2 (code for the r2 BML plugin), 
</span><br>
<span class="quotelev1">&gt; ompi/mca/btl/tcp
</span><br>
<span class="quotelev2">&gt; &gt; (code for the tcp BTL plugin), etc.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; This is probably enough to get you started.  Let us know 
</span><br>
<span class="quotelev1">&gt; what your next
</span><br>
<span class="quotelev2">&gt; &gt; questions are.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;-----Original Message-----
</span><br>
<span class="quotelev3">&gt; &gt;&gt;From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;[mailto:users-bounces_at_[hidden]] On Behalf Of Mahesh Barve
</span><br>
<span class="quotelev3">&gt; &gt;&gt;Sent: Tuesday, May 23, 2006 1:24 AM
</span><br>
<span class="quotelev3">&gt; &gt;&gt;To: users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;Subject: [OMPI users] Help regarding send/recv code
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;Hi,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I am a novice to openmpi. Just managed to get openmpi
</span><br>
<span class="quotelev3">&gt; &gt;&gt;running on my system. 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I would like to modify the code for send and recv.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;The target lower level device will be ethernet and
</span><br>
<span class="quotelev3">&gt; &gt;&gt;infiniband. I would like to know the files/functions 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;to look for. Could you please guide me in this. 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; thanks,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;-Mahesh 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;__________________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt;Do You Yahoo!?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;Tired of spam?  Yahoo! Mail has the best spam protection around 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;<a href="http://mail.yahoo.com">http://mail.yahoo.com</a> 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt;users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
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
<li><strong>Next message:</strong> <a href="1316.php">George Bosilca: "Re: [OMPI users] Thread Safety"</a>
<li><strong>Previous message:</strong> <a href="1314.php">John Robinson: "Re: [OMPI users] Help regarding send/recv code"</a>
<li><strong>Maybe in reply to:</strong> <a href="1255.php">Mahesh Barve: "[OMPI users] Help regarding send/recv code"</a>
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
