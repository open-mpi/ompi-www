<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov 22 22:57:14 2005" -->
<!-- isoreceived="20051123035714" -->
<!-- sent="Tue, 22 Nov 2005 22:57:06 -0500" -->
<!-- isosent="20051123035706" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Configuring port" -->
<!-- id="dfe064c1f81df2edf9418f18446fe1df_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CDA1C952-BCB9-4E27-B895-25A5539ADE2D_at_columbia.edu" -->
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
<strong>Date:</strong> 2005-11-22 22:57:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0385.php">Jeff Squyres: "Re: [O-MPI users] mpirun --prefix"</a>
<li><strong>Previous message:</strong> <a href="0383.php">Anthony Chan: "[O-MPI users] mpirun --prefix"</a>
<li><strong>In reply to:</strong> <a href="0378.php">Enrique Curchitser: "Re: [O-MPI users] Configuring port"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 21, 2005, at 4:44 PM, Enrique Curchitser wrote:
<br>
<p><span class="quotelev1">&gt; OK, I'll take you up on the offer.   I have 4 Power Mac G5's on a
</span><br>
<span class="quotelev1">&gt; private network connected through a GigE switch.  Even for large 
</span><br>
<span class="quotelev1">&gt; problems
</span><br>
<span class="quotelev1">&gt; the communications are slugish.  This same code has shown to scale
</span><br>
<span class="quotelev1">&gt; to upwards of 128 processors on IBM SP's.  So here is the output
</span><br>
<span class="quotelev1">&gt; to ompi_info --param btl tcp.  Any help tunning this, or other
</span><br>
<span class="quotelev1">&gt; parameters would be greatly appreciated.  Are there any particular 
</span><br>
<span class="quotelev1">&gt; plugins for TCP?
</span><br>
<p>The TCP BTL is really the only plugin for MPI TCP support in Open MPI.
<br>
<p><span class="quotelev1">&gt; MCA btl: parameter &quot;btl_base_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            If btl_base_debug is 1 standard debug is
</span><br>
<span class="quotelev1">&gt; output, if &gt; 1 verbose debug is output
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for
</span><br>
<span class="quotelev1">&gt; the btl framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_base_verbose&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level for the btl framework (0 =
</span><br>
<span class="quotelev1">&gt; no verbosity)
</span><br>
<p>These are pretty self-explanitory; they won't help with performance 
<br>
tuning.
<br>
<p><span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_tcp_if_include&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;en1&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_tcp_if_exclude&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;lo&quot;)
</span><br>
<p>These will help you include and exclude various TCP interfaces on your 
<br>
machine.  So they're not really for tuning so much as selecting which 
<br>
network you want to run over.  They're pretty much only useful on 
<br>
machines with multiple TCP networks.
<br>
<p><span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_tcp_free_list_num&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;8&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_tcp_free_list_max&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_tcp_free_list_inc&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;32&quot;)
</span><br>
<p>This is a free list of buffers for copying non-contiguous user data 
<br>
into on a send.  That is, if you have an MPI_Datatype that represents 
<br>
non-contiguous data, we'll first copy it into buffers from this 
<br>
freelist and then send from there.  We start with 8 initial buffers and 
<br>
grow the list 32 buffers at a time (-1 mean no max number of buffers).  
<br>
This probably shouldn't have too much to do with performance.
<br>
<p><span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_tcp_sndbuf&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_tcp_rcvbuf&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;131072&quot;)
</span><br>
<p>This is the OS socket buffer sizing (i.e., how much internal buffer 
<br>
space the OS has for each socket, in bytes).  I have a dim recollection 
<br>
that Linux has a max size for this, and if you set it above Linux's max 
<br>
size, it's silently/implicitly downsized to the max.  So increasing the 
<br>
value arbitrarily doesn't help much.
<br>
<p><span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_tcp_exclusivity&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<p>This has to do with the priority of the tcp btl relative to the other 
<br>
btl's.  Right now, it's set to the lowest value so that tcp is always 
<br>
chosen after all the rest (e.g., GM, IB, and shared memory all have 
<br>
higher exclusivity values).
<br>
<p><span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_tcp_eager_limit&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;65536&quot;)
</span><br>
<p>This is the largest size that we'll send in the first fragment 
<br>
(eagerly).  If you have a fast network, you might try increasing this.
<br>
<p><span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_tcp_min_send_size&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;65536&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_tcp_max_send_size&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_tcp_min_rdma_size&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_tcp_max_rdma_size&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;2147483647&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_tcp_flags&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;10&quot;)
</span><br>
<p>I'm going to defer explanation of these params to Galen.  Galen?
<br>
<p><span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_tcp_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<p>This parameter is not actually used.
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0385.php">Jeff Squyres: "Re: [O-MPI users] mpirun --prefix"</a>
<li><strong>Previous message:</strong> <a href="0383.php">Anthony Chan: "[O-MPI users] mpirun --prefix"</a>
<li><strong>In reply to:</strong> <a href="0378.php">Enrique Curchitser: "Re: [O-MPI users] Configuring port"</a>
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
