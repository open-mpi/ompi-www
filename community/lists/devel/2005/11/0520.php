<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov  8 17:10:07 2005" -->
<!-- isoreceived="20051108221007" -->
<!-- sent="Tue, 8 Nov 2005 17:04:54 -0500" -->
<!-- isosent="20051108220454" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="data-type engine" -->
<!-- id="B9864468-1486-479A-A951-0AAD68E30BAA_at_cs.utk.edu" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-08 17:04:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0521.php">Timothy S. Woodall: "Re:  data-type engine"</a>
<li><strong>Previous message:</strong> <a href="0519.php">Jeff Squyres: "Open MPI @SC2005"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0521.php">Timothy S. Woodall: "Re:  data-type engine"</a>
<li><strong>Reply:</strong> <a href="0521.php">Timothy S. Woodall: "Re:  data-type engine"</a>
<li><strong>Reply:</strong> <a href="0522.php">Timothy S. Woodall: "Re:  data-type engine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I fix the problem we had with BLACS. As it look like everybody  
<br>
believe it was a data-type issue I fix it in the DDT engine. However,  
<br>
as I explain this morning on the phone conference (and nobody believe  
<br>
it) the problem was triggered by the way the convertor was used. For  
<br>
me it's an easy fix at the DDT layer that will allow BTL developers  
<br>
to pay less attention to the way they pack/unpack data ... but it is  
<br>
not the way the DDT was designed.
<br>
<p>Here is the explanation of what was wrong inside:
<br>
BLACS create a triangular matrix using an indexed type. The memory  
<br>
layout of this data-type is composed by several contiguous buffers  
<br>
with some gaps in between. The problem we had was the following:
<br>
1. on the sender size pack was called with a buffer large enough to  
<br>
hold all the data.
<br>
2. on the receiver side the unpack was called twice with different  
<br>
iovecs. Even if the total length of the 2 iovec was the correct  
<br>
length it happen that the length of the first one was too short  
<br>
making the convertor to stop in the middle of a basic type. And that  
<br>
was not the way the convertor was designed to work.
<br>
<p>Here are the output of the ddt engine for SM.
<br>
<p>First the pack side:
<br>
<p>[applebasket.cs.utk.edu:16760] ompi_convertor_generic_simple_pack 
<br>
( 0xbfffc104, {0x2811430, 4560}, 1 )
<br>
[applebasket.cs.utk.edu:16760] unpack start pos_desc 0 count_desc 6  
<br>
disp 0
<br>
stack_pos 0 pos_desc -1 count_desc 1 disp 0
<br>
[applebasket.cs.utk.edu:16760] pack 1. memcpy( 0x2811430, 0xac650,  
<br>
96 ) =&gt; space 4560
<br>
[applebasket.cs.utk.edu:16760] pack 1. memcpy( 0x2811490, 0xac7e0,  
<br>
112 ) =&gt; space 4464
<br>
[applebasket.cs.utk.edu:16760] pack 1. memcpy( 0x2811500, 0xac970,  
<br>
128 ) =&gt; space 4352
<br>
[applebasket.cs.utk.edu:16760] pack 1. memcpy( 0x2811580, 0xacb00,  
<br>
144 ) =&gt; space 4224
<br>
[applebasket.cs.utk.edu:16760] pack 1. memcpy( 0x2811610, 0xacc90,  
<br>
160 ) =&gt; space 4080
<br>
[applebasket.cs.utk.edu:16760] pack 1. memcpy( 0x28116b0, 0xace20,  
<br>
176 ) =&gt; space 3920
<br>
[applebasket.cs.utk.edu:16760] pack 1. memcpy( 0x2811760, 0xacfb0,  
<br>
192 ) =&gt; space 3744
<br>
[applebasket.cs.utk.edu:16760] pack 1. memcpy( 0x2811820, 0xad140,  
<br>
208 ) =&gt; space 3552
<br>
[applebasket.cs.utk.edu:16760] pack 1. memcpy( 0x28118f0, 0xad2d0,  
<br>
224 ) =&gt; space 3344
<br>
[applebasket.cs.utk.edu:16760] pack 1. memcpy( 0x28119d0, 0xad460,  
<br>
240 ) =&gt; space 3120
<br>
[applebasket.cs.utk.edu:16760] pack 1. memcpy( 0x2811ac0, 0xad5f0,  
<br>
256 ) =&gt; space 2880
<br>
[applebasket.cs.utk.edu:16760] pack 1. memcpy( 0x2811bc0, 0xad780,  
<br>
272 ) =&gt; space 2624
<br>
[applebasket.cs.utk.edu:16760] pack 1. memcpy( 0x2811cd0, 0xad910,  
<br>
288 ) =&gt; space 2352
<br>
[applebasket.cs.utk.edu:16760] pack 1. memcpy( 0x2811df0, 0xadaa0,  
<br>
304 ) =&gt; space 2064
<br>
[applebasket.cs.utk.edu:16760] pack 1. memcpy( 0x2811f20, 0xadc30,  
<br>
320 ) =&gt; space 1760
<br>
[applebasket.cs.utk.edu:16760] pack 1. memcpy( 0x2812060, 0xaddc0,  
<br>
336 ) =&gt; space 1440
<br>
[applebasket.cs.utk.edu:16760] pack 1. memcpy( 0x28121b0, 0xadf50,  
<br>
352 ) =&gt; space 1104
<br>
[applebasket.cs.utk.edu:16760] pack 1. memcpy( 0x2812310, 0xae0e0,  
<br>
368 ) =&gt; space 752
<br>
[applebasket.cs.utk.edu:16760] pack 1. memcpy( 0x2812480, 0xae270,  
<br>
384 ) =&gt; space 384
<br>
[applebasket.cs.utk.edu:16760] pack end_loop count 1 stack_pos 0  
<br>
pos_desc 19 disp 0 space 0
<br>
<p>As you can see there is one pack operation with a buffer of 4560  
<br>
bytes ... exactly the size of the whole data. Even if the pack pay  
<br>
attention to not cut a basic type in the middle, in this particular  
<br>
case it has enough data to do it's job correctly.
<br>
<p>The receiver side look a little bit different:
<br>
<p>[applebasket.cs.utk.edu:16758] ompi_convertor_generic_simple_unpack 
<br>
( 0x280bf04, {0x229e15c, 956}, 1 )
<br>
[applebasket.cs.utk.edu:16758] unpack start pos_desc 0 count_desc 6  
<br>
disp 0
<br>
stack_pos 0 pos_desc -1 count_desc 1 disp 0
<br>
[applebasket.cs.utk.edu:16758] unpack 1. memcpy( 0xac650, 0x229e15c,  
<br>
96 ) =&gt; space 956
<br>
[applebasket.cs.utk.edu:16758] unpack 1. memcpy( 0xac7e0, 0x229e1bc,  
<br>
112 ) =&gt; space 860
<br>
[applebasket.cs.utk.edu:16758] unpack 1. memcpy( 0xac970, 0x229e22c,  
<br>
128 ) =&gt; space 748
<br>
[applebasket.cs.utk.edu:16758] unpack 1. memcpy( 0xacb00, 0x229e2ac,  
<br>
144 ) =&gt; space 620
<br>
[applebasket.cs.utk.edu:16758] unpack 1. memcpy( 0xacc90, 0x229e33c,  
<br>
160 ) =&gt; space 476
<br>
[applebasket.cs.utk.edu:16758] unpack 1. memcpy( 0xace20, 0x229e3dc,  
<br>
176 ) =&gt; space 316
<br>
[applebasket.cs.utk.edu:16758] unpack 1. memcpy( 0xacfb0, 0x229e48c,  
<br>
128 ) =&gt; space 140
<br>
[applebasket.cs.utk.edu:16758] Losing 12 bytes !!!
<br>
[applebasket.cs.utk.edu:16758] unpack save stack stack_pos 1 pos_desc  
<br>
6 count_desc 4 disp 128
<br>
[applebasket.cs.utk.edu:16758] ompi_convertor_generic_simple_unpack 
<br>
( 0x280bf04, {0x229e158, 3604}, 1 )
<br>
[applebasket.cs.utk.edu:16758] unpack start pos_desc 6 count_desc 4  
<br>
disp 128
<br>
stack_pos 0 pos_desc -1 count_desc 1 disp 0
<br>
[applebasket.cs.utk.edu:16758] unpack pending from the last unpack 12  
<br>
out of 16 bytes
<br>
[applebasket.cs.utk.edu:16758] unpack 1. memcpy( 0xad030, 0x280bf4c,  
<br>
16 ) =&gt; space 16
<br>
... (skipped)
<br>
<p>We can see the trace of 2 unpack operations, one with a size of 956  
<br>
bytes and the other with 3604. In the middle of the previous text you  
<br>
can notice the &quot;Losing 12 bytes !!!&quot; message. The basic type here is  
<br>
a long double (16 bytes on this machine) so we definitively stop in  
<br>
the middle of a basic type.
<br>
<p>A correct usage of the convertor could prevent such problems. Anyway,  
<br>
now the convertor will remember such kind of errors and will  
<br>
automatically correct them (the cost is just an if in the critical  
<br>
path and some extra memory in the convertor struct).
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>&quot;Half of what I say is meaningless; but I say it so that the other  
<br>
half may reach you&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kahlil Gibran
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0521.php">Timothy S. Woodall: "Re:  data-type engine"</a>
<li><strong>Previous message:</strong> <a href="0519.php">Jeff Squyres: "Open MPI @SC2005"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0521.php">Timothy S. Woodall: "Re:  data-type engine"</a>
<li><strong>Reply:</strong> <a href="0521.php">Timothy S. Woodall: "Re:  data-type engine"</a>
<li><strong>Reply:</strong> <a href="0522.php">Timothy S. Woodall: "Re:  data-type engine"</a>
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
