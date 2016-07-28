<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov  8 18:16:33 2005" -->
<!-- isoreceived="20051108231633" -->
<!-- sent="Tue, 8 Nov 2005 16:16:28 -0700 (MST)" -->
<!-- isosent="20051108231628" -->
<!-- name="Timothy S. Woodall" -->
<!-- email="twoodall_at_[hidden]" -->
<!-- subject="Re:  data-type engine" -->
<!-- id="39132.128.165.0.81.1131491788.squirrel_at_webmail.lanl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="B9864468-1486-479A-A951-0AAD68E30BAA_at_cs.utk.edu" -->
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
<strong>From:</strong> Timothy S. Woodall (<em>twoodall_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-08 18:16:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0522.php">Timothy S. Woodall: "Re:  data-type engine"</a>
<li><strong>Previous message:</strong> <a href="0520.php">George Bosilca: "data-type engine"</a>
<li><strong>In reply to:</strong> <a href="0520.php">George Bosilca: "data-type engine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0522.php">Timothy S. Woodall: "Re:  data-type engine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George,
<br>
<p>As I indicated this morning, what you are describing is not the
<br>
correct behaviour of the PML/BTL's. Again, if you can provide me a
<br>
simple test case to duplicate this, I'd be glad to look at it.
<br>
<p>Tim
<br>
<p><p><p><span class="quotelev1">&gt; I fix the problem we had with BLACS. As it look like everybody
</span><br>
<span class="quotelev1">&gt; believe it was a data-type issue I fix it in the DDT engine. However,
</span><br>
<span class="quotelev1">&gt; as I explain this morning on the phone conference (and nobody believe
</span><br>
<span class="quotelev1">&gt; it) the problem was triggered by the way the convertor was used. For
</span><br>
<span class="quotelev1">&gt; me it's an easy fix at the DDT layer that will allow BTL developers
</span><br>
<span class="quotelev1">&gt; to pay less attention to the way they pack/unpack data ... but it is
</span><br>
<span class="quotelev1">&gt; not the way the DDT was designed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is the explanation of what was wrong inside:
</span><br>
<span class="quotelev1">&gt; BLACS create a triangular matrix using an indexed type. The memory
</span><br>
<span class="quotelev1">&gt; layout of this data-type is composed by several contiguous buffers
</span><br>
<span class="quotelev1">&gt; with some gaps in between. The problem we had was the following:
</span><br>
<span class="quotelev1">&gt; 1. on the sender size pack was called with a buffer large enough to
</span><br>
<span class="quotelev1">&gt; hold all the data.
</span><br>
<span class="quotelev1">&gt; 2. on the receiver side the unpack was called twice with different
</span><br>
<span class="quotelev1">&gt; iovecs. Even if the total length of the 2 iovec was the correct
</span><br>
<span class="quotelev1">&gt; length it happen that the length of the first one was too short
</span><br>
<span class="quotelev1">&gt; making the convertor to stop in the middle of a basic type. And that
</span><br>
<span class="quotelev1">&gt; was not the way the convertor was designed to work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here are the output of the ddt engine for SM.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First the pack side:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [applebasket.cs.utk.edu:16760] ompi_convertor_generic_simple_pack
</span><br>
<span class="quotelev1">&gt; ( 0xbfffc104, {0x2811430, 4560}, 1 )
</span><br>
<span class="quotelev1">&gt; [applebasket.cs.utk.edu:16760] unpack start pos_desc 0 count_desc 6
</span><br>
<span class="quotelev1">&gt; disp 0
</span><br>
<span class="quotelev1">&gt; stack_pos 0 pos_desc -1 count_desc 1 disp 0
</span><br>
<span class="quotelev1">&gt; [applebasket.cs.utk.edu:16760] pack 1. memcpy( 0x2811430, 0xac650,
</span><br>
<span class="quotelev1">&gt; 96 ) =&gt; space 4560
</span><br>
<span class="quotelev1">&gt; [applebasket.cs.utk.edu:16760] pack 1. memcpy( 0x2811490, 0xac7e0,
</span><br>
<span class="quotelev1">&gt; 112 ) =&gt; space 4464
</span><br>
<span class="quotelev1">&gt; [applebasket.cs.utk.edu:16760] pack 1. memcpy( 0x2811500, 0xac970,
</span><br>
<span class="quotelev1">&gt; 128 ) =&gt; space 4352
</span><br>
<span class="quotelev1">&gt; [applebasket.cs.utk.edu:16760] pack 1. memcpy( 0x2811580, 0xacb00,
</span><br>
<span class="quotelev1">&gt; 144 ) =&gt; space 4224
</span><br>
<span class="quotelev1">&gt; [applebasket.cs.utk.edu:16760] pack 1. memcpy( 0x2811610, 0xacc90,
</span><br>
<span class="quotelev1">&gt; 160 ) =&gt; space 4080
</span><br>
<span class="quotelev1">&gt; [applebasket.cs.utk.edu:16760] pack 1. memcpy( 0x28116b0, 0xace20,
</span><br>
<span class="quotelev1">&gt; 176 ) =&gt; space 3920
</span><br>
<span class="quotelev1">&gt; [applebasket.cs.utk.edu:16760] pack 1. memcpy( 0x2811760, 0xacfb0,
</span><br>
<span class="quotelev1">&gt; 192 ) =&gt; space 3744
</span><br>
<span class="quotelev1">&gt; [applebasket.cs.utk.edu:16760] pack 1. memcpy( 0x2811820, 0xad140,
</span><br>
<span class="quotelev1">&gt; 208 ) =&gt; space 3552
</span><br>
<span class="quotelev1">&gt; [applebasket.cs.utk.edu:16760] pack 1. memcpy( 0x28118f0, 0xad2d0,
</span><br>
<span class="quotelev1">&gt; 224 ) =&gt; space 3344
</span><br>
<span class="quotelev1">&gt; [applebasket.cs.utk.edu:16760] pack 1. memcpy( 0x28119d0, 0xad460,
</span><br>
<span class="quotelev1">&gt; 240 ) =&gt; space 3120
</span><br>
<span class="quotelev1">&gt; [applebasket.cs.utk.edu:16760] pack 1. memcpy( 0x2811ac0, 0xad5f0,
</span><br>
<span class="quotelev1">&gt; 256 ) =&gt; space 2880
</span><br>
<span class="quotelev1">&gt; [applebasket.cs.utk.edu:16760] pack 1. memcpy( 0x2811bc0, 0xad780,
</span><br>
<span class="quotelev1">&gt; 272 ) =&gt; space 2624
</span><br>
<span class="quotelev1">&gt; [applebasket.cs.utk.edu:16760] pack 1. memcpy( 0x2811cd0, 0xad910,
</span><br>
<span class="quotelev1">&gt; 288 ) =&gt; space 2352
</span><br>
<span class="quotelev1">&gt; [applebasket.cs.utk.edu:16760] pack 1. memcpy( 0x2811df0, 0xadaa0,
</span><br>
<span class="quotelev1">&gt; 304 ) =&gt; space 2064
</span><br>
<span class="quotelev1">&gt; [applebasket.cs.utk.edu:16760] pack 1. memcpy( 0x2811f20, 0xadc30,
</span><br>
<span class="quotelev1">&gt; 320 ) =&gt; space 1760
</span><br>
<span class="quotelev1">&gt; [applebasket.cs.utk.edu:16760] pack 1. memcpy( 0x2812060, 0xaddc0,
</span><br>
<span class="quotelev1">&gt; 336 ) =&gt; space 1440
</span><br>
<span class="quotelev1">&gt; [applebasket.cs.utk.edu:16760] pack 1. memcpy( 0x28121b0, 0xadf50,
</span><br>
<span class="quotelev1">&gt; 352 ) =&gt; space 1104
</span><br>
<span class="quotelev1">&gt; [applebasket.cs.utk.edu:16760] pack 1. memcpy( 0x2812310, 0xae0e0,
</span><br>
<span class="quotelev1">&gt; 368 ) =&gt; space 752
</span><br>
<span class="quotelev1">&gt; [applebasket.cs.utk.edu:16760] pack 1. memcpy( 0x2812480, 0xae270,
</span><br>
<span class="quotelev1">&gt; 384 ) =&gt; space 384
</span><br>
<span class="quotelev1">&gt; [applebasket.cs.utk.edu:16760] pack end_loop count 1 stack_pos 0
</span><br>
<span class="quotelev1">&gt; pos_desc 19 disp 0 space 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As you can see there is one pack operation with a buffer of 4560
</span><br>
<span class="quotelev1">&gt; bytes ... exactly the size of the whole data. Even if the pack pay
</span><br>
<span class="quotelev1">&gt; attention to not cut a basic type in the middle, in this particular
</span><br>
<span class="quotelev1">&gt; case it has enough data to do it's job correctly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The receiver side look a little bit different:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [applebasket.cs.utk.edu:16758] ompi_convertor_generic_simple_unpack
</span><br>
<span class="quotelev1">&gt; ( 0x280bf04, {0x229e15c, 956}, 1 )
</span><br>
<span class="quotelev1">&gt; [applebasket.cs.utk.edu:16758] unpack start pos_desc 0 count_desc 6
</span><br>
<span class="quotelev1">&gt; disp 0
</span><br>
<span class="quotelev1">&gt; stack_pos 0 pos_desc -1 count_desc 1 disp 0
</span><br>
<span class="quotelev1">&gt; [applebasket.cs.utk.edu:16758] unpack 1. memcpy( 0xac650, 0x229e15c,
</span><br>
<span class="quotelev1">&gt; 96 ) =&gt; space 956
</span><br>
<span class="quotelev1">&gt; [applebasket.cs.utk.edu:16758] unpack 1. memcpy( 0xac7e0, 0x229e1bc,
</span><br>
<span class="quotelev1">&gt; 112 ) =&gt; space 860
</span><br>
<span class="quotelev1">&gt; [applebasket.cs.utk.edu:16758] unpack 1. memcpy( 0xac970, 0x229e22c,
</span><br>
<span class="quotelev1">&gt; 128 ) =&gt; space 748
</span><br>
<span class="quotelev1">&gt; [applebasket.cs.utk.edu:16758] unpack 1. memcpy( 0xacb00, 0x229e2ac,
</span><br>
<span class="quotelev1">&gt; 144 ) =&gt; space 620
</span><br>
<span class="quotelev1">&gt; [applebasket.cs.utk.edu:16758] unpack 1. memcpy( 0xacc90, 0x229e33c,
</span><br>
<span class="quotelev1">&gt; 160 ) =&gt; space 476
</span><br>
<span class="quotelev1">&gt; [applebasket.cs.utk.edu:16758] unpack 1. memcpy( 0xace20, 0x229e3dc,
</span><br>
<span class="quotelev1">&gt; 176 ) =&gt; space 316
</span><br>
<span class="quotelev1">&gt; [applebasket.cs.utk.edu:16758] unpack 1. memcpy( 0xacfb0, 0x229e48c,
</span><br>
<span class="quotelev1">&gt; 128 ) =&gt; space 140
</span><br>
<span class="quotelev1">&gt; [applebasket.cs.utk.edu:16758] Losing 12 bytes !!!
</span><br>
<span class="quotelev1">&gt; [applebasket.cs.utk.edu:16758] unpack save stack stack_pos 1 pos_desc
</span><br>
<span class="quotelev1">&gt; 6 count_desc 4 disp 128
</span><br>
<span class="quotelev1">&gt; [applebasket.cs.utk.edu:16758] ompi_convertor_generic_simple_unpack
</span><br>
<span class="quotelev1">&gt; ( 0x280bf04, {0x229e158, 3604}, 1 )
</span><br>
<span class="quotelev1">&gt; [applebasket.cs.utk.edu:16758] unpack start pos_desc 6 count_desc 4
</span><br>
<span class="quotelev1">&gt; disp 128
</span><br>
<span class="quotelev1">&gt; stack_pos 0 pos_desc -1 count_desc 1 disp 0
</span><br>
<span class="quotelev1">&gt; [applebasket.cs.utk.edu:16758] unpack pending from the last unpack 12
</span><br>
<span class="quotelev1">&gt; out of 16 bytes
</span><br>
<span class="quotelev1">&gt; [applebasket.cs.utk.edu:16758] unpack 1. memcpy( 0xad030, 0x280bf4c,
</span><br>
<span class="quotelev1">&gt; 16 ) =&gt; space 16
</span><br>
<span class="quotelev1">&gt; ... (skipped)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We can see the trace of 2 unpack operations, one with a size of 956
</span><br>
<span class="quotelev1">&gt; bytes and the other with 3604. In the middle of the previous text you
</span><br>
<span class="quotelev1">&gt; can notice the &quot;Losing 12 bytes !!!&quot; message. The basic type here is
</span><br>
<span class="quotelev1">&gt; a long double (16 bytes on this machine) so we definitively stop in
</span><br>
<span class="quotelev1">&gt; the middle of a basic type.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A correct usage of the convertor could prevent such problems. Anyway,
</span><br>
<span class="quotelev1">&gt; now the convertor will remember such kind of errors and will
</span><br>
<span class="quotelev1">&gt; automatically correct them (the cost is just an if in the critical
</span><br>
<span class="quotelev1">&gt; path and some extra memory in the convertor struct).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;Half of what I say is meaningless; but I say it so that the other
</span><br>
<span class="quotelev1">&gt; half may reach you&quot;
</span><br>
<span class="quotelev1">&gt;                                    Kahlil Gibran
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0522.php">Timothy S. Woodall: "Re:  data-type engine"</a>
<li><strong>Previous message:</strong> <a href="0520.php">George Bosilca: "data-type engine"</a>
<li><strong>In reply to:</strong> <a href="0520.php">George Bosilca: "data-type engine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0522.php">Timothy S. Woodall: "Re:  data-type engine"</a>
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
