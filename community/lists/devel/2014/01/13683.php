<?
$subject_val = "Re: [OMPI devel] RFC: OB1 optimizations";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 10 08:24:16 2014" -->
<!-- isoreceived="20140110132416" -->
<!-- sent="Fri, 10 Jan 2014 14:24:19 +0100" -->
<!-- isosent="20140110132419" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: OB1 optimizations" -->
<!-- id="6B5C660D-2362-44CB-8892-F442590FBEC0_at_icl.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140108170938.GJ61812_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: OB1 optimizations<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-10 08:24:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13684.php">Jeff Squyres (jsquyres): "[OMPI devel] README / OS X versions (was: 1.7.4rc2r30168 - configure failure on Mac OSX 10.5)"</a>
<li><strong>Previous message:</strong> <a href="13682.php">Mike Dubman: "Re: [OMPI devel] 1.7.4rc2r30148 run failure NetBSD6-x86"</a>
<li><strong>In reply to:</strong> <a href="13590.php">Nathan Hjelm: "Re: [OMPI devel] RFC: OB1 optimizations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13706.php">Nathan Hjelm: "Re: [OMPI devel] RFC: OB1 optimizations"</a>
<li><strong>Reply:</strong> <a href="13706.php">Nathan Hjelm: "Re: [OMPI devel] RFC: OB1 optimizations"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nathan,
<br>
<p>When you get access to the machine it might be interesting to show not only the after-patch performance but also what the trunk is getting on the same architecture.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>On Jan 8, 2014, at 18:09 , Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Yeah. Its hard to say what the results will look like on Haswell. I
</span><br>
<span class="quotelev1">&gt; expect they should show some improvement from George's change but we
</span><br>
<span class="quotelev1">&gt; won't know until I can get to a Haswell node. Hopefully one becomes
</span><br>
<span class="quotelev1">&gt; available today.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Jan 08, 2014 at 08:59:34AM -0800, Paul Hargrove wrote:
</span><br>
<span class="quotelev2">&gt;&gt;   Nevermind, since Nathan just clarified that the results are not
</span><br>
<span class="quotelev2">&gt;&gt;   comparable.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   -Paul [Sent from my phone]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   On Jan 8, 2014 8:58 AM, &quot;Paul Hargrove&quot; &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     Interestingly enough the 4MB latency actually improved significantly
</span><br>
<span class="quotelev2">&gt;&gt;     relative to the initial numbers.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     -Paul [Sent from my phone]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     On Jan 8, 2014 8:50 AM, &quot;George Bosilca&quot; &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;       These results are way worst that the one you send on your previous
</span><br>
<span class="quotelev2">&gt;&gt;       email? What is the reason?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;         George.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;       On Jan 8, 2014, at 17:33 , Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ah, good catch. A new version is attached that should eliminate the
</span><br>
<span class="quotelev2">&gt;&gt;       race
</span><br>
<span class="quotelev3">&gt;&gt;&gt; window for the multi-threaded case. Performance numbers are still
</span><br>
<span class="quotelev3">&gt;&gt;&gt; looking really good. We beat mvapich2 in the small message ping-pong
</span><br>
<span class="quotelev2">&gt;&gt;       by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a good margin. See the results below. The large message latency
</span><br>
<span class="quotelev3">&gt;&gt;&gt; difference for large messages is probably due to a difference in the
</span><br>
<span class="quotelev2">&gt;&gt;       max
</span><br>
<span class="quotelev3">&gt;&gt;&gt; send size for vader vs mvapich.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To answer Pasha's question. I don't see a noticiable difference in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; performance for btl's with no sendi function (this includes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ugni). OpenIB should get a boost. I will test that once I get an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; allocation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU: Xeon E5-2670 @ 2.60 GHz
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI (-mca btl vader,self):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # OSU MPI Latency Test v4.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Size          Latency (us)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0                       0.17
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1                       0.19
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2                       0.19
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4                       0.19
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 8                       0.19
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 16                      0.19
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 32                      0.19
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 64                      0.40
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 128                     0.40
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 256                     0.43
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 512                     0.52
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1024                    0.67
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2048                    0.94
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4096                    1.44
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 8192                    2.04
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 16384                   3.47
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 32768                   6.10
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 65536                   9.38
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 131072                 16.47
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 262144                 29.63
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 524288                 54.81
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1048576               106.63
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2097152               206.84
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4194304               421.26
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mvapich2 1.9:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # OSU MPI Latency Test
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Size            Latency (us)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0                         0.23
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1                         0.23
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2                         0.23
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4                         0.23
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 8                         0.23
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 16                        0.28
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 32                        0.28
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 64                        0.39
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 128                       0.40
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 256                       0.40
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 512                       0.42
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1024                      0.51
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2048                      0.71
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4096                      1.02
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 8192                      1.60
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 16384                     3.47
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 32768                     5.05
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 65536                     8.06
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 131072                   14.82
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 262144                   28.15
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 524288                   53.69
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1048576                 127.47
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2097152                 235.58
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4194304                 683.90
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Nathan
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Tue, Jan 07, 2014 at 06:23:13PM -0700, George Bosilca wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  The local request is not correctly released, leading to assert in
</span><br>
<span class="quotelev2">&gt;&gt;       debug
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  mode. This is because you avoid calling
</span><br>
<span class="quotelev2">&gt;&gt;       MCA_PML_BASE_RECV_REQUEST_FINI,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  fact that leaves the request in an ACTIVE state, condition
</span><br>
<span class="quotelev2">&gt;&gt;       carefully
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  checked during the call to destructor.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  I attached a second patch that fixes the issue above, and
</span><br>
<span class="quotelev2">&gt;&gt;       implement a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  similar optimization for the blocking send.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Unfortunately, this is not enough. The mca_pml_ob1_send_inline
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  optimization is horribly wrong in a multithreaded case as it
</span><br>
<span class="quotelev2">&gt;&gt;       alter the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  send_sequence without storing it. If you create a gap in the
</span><br>
<span class="quotelev2">&gt;&gt;       send_sequence
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  a deadlock will __definitively__ occur. I strongly suggest you
</span><br>
<span class="quotelev2">&gt;&gt;       turn off
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  the mca_pml_ob1_send_inline optimization on the multithreaded
</span><br>
<span class="quotelev2">&gt;&gt;       case. All
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  the others optimizations should be safe in all cases.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    George.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  On Jan 8, 2014, at 01:15 , Shamis, Pavel &lt;shamisp_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Overall it looks good. It would be helpful to validate performance
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  numbers for other interconnects as well.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -Pasha
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of
</span><br>
<span class="quotelev2">&gt;&gt;       Nathan
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hjelm
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Sent: Tuesday, January 07, 2014 6:45 PM
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; To: Open MPI Developers List
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subject: [OMPI devel] RFC: OB1 optimizations
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; What: Push some ob1 optimizations to the trunk and 1.7.5.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; What: This patch contains two optimizations:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; - Introduce a fast send path for blocking send calls. This path
</span><br>
<span class="quotelev2">&gt;&gt;       uses
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  the btl sendi function to put the data on the wire without the
</span><br>
<span class="quotelev2">&gt;&gt;       need
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  for setting up a send request. In the case of btl/vader this
</span><br>
<span class="quotelev2">&gt;&gt;       can
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  also avoid allocating/initializing a new fragment. With
</span><br>
<span class="quotelev2">&gt;&gt;       btl/vader
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  this optimization improves small message latency by 50-200ns in
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  ping-pong type benchmarks. Larger messages may take a small hit
</span><br>
<span class="quotelev2">&gt;&gt;       in
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  the range of 10-20ns.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; - Use a stack-allocated receive request for blocking recieves.
</span><br>
<span class="quotelev2">&gt;&gt;       This
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  optimization saves the extra instructions associated with
</span><br>
<span class="quotelev2">&gt;&gt;       accessing
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  the receive request free list. I was able to get another
</span><br>
<span class="quotelev2">&gt;&gt;       50-200ns
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  improvement in the small-message ping-pong with this
</span><br>
<span class="quotelev2">&gt;&gt;       optimization. I
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  see no hit for larger messages.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; When: These changes touch the critical path in ob1 and are
</span><br>
<span class="quotelev2">&gt;&gt;       targeted for
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 1.7.5. As such I will set a moderately long timeout. Timeout set
</span><br>
<span class="quotelev2">&gt;&gt;       for
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; next Friday (Jan 17).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Some results from osu_latency on haswell:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; hjelmn_at_cn143 pt2pt]$ mpirun -n 2 --bind-to core -mca btl
</span><br>
<span class="quotelev2">&gt;&gt;       vader,self
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ./osu_latency
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # OSU MPI Latency Test v4.0.1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # Size          Latency (us)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 0                       0.11
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 1                       0.14
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 2                       0.14
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 4                       0.14
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 8                       0.14
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 16                      0.14
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 32                      0.15
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 64                      0.18
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 128                     0.36
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 256                     0.37
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 512                     0.46
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 1024                    0.56
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 2048                    0.80
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 4096                    1.12
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 8192                    1.68
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 16384                   2.98
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 32768                   5.10
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 65536                   8.12
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 131072                 14.07
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 262144                 25.30
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 524288                 47.40
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 1048576                91.71
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 2097152               195.56
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 4194304               487.05
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Patch Attached.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -Nathan
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;       &lt;ob1_optimization_take3.patch&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;       _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;       devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;       devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;       <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13684.php">Jeff Squyres (jsquyres): "[OMPI devel] README / OS X versions (was: 1.7.4rc2r30168 - configure failure on Mac OSX 10.5)"</a>
<li><strong>Previous message:</strong> <a href="13682.php">Mike Dubman: "Re: [OMPI devel] 1.7.4rc2r30148 run failure NetBSD6-x86"</a>
<li><strong>In reply to:</strong> <a href="13590.php">Nathan Hjelm: "Re: [OMPI devel] RFC: OB1 optimizations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13706.php">Nathan Hjelm: "Re: [OMPI devel] RFC: OB1 optimizations"</a>
<li><strong>Reply:</strong> <a href="13706.php">Nathan Hjelm: "Re: [OMPI devel] RFC: OB1 optimizations"</a>
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
