<?
$subject_val = "Re: [OMPI users] Type struct question";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 11 10:55:25 2011" -->
<!-- isoreceived="20111111155525" -->
<!-- sent="Fri, 11 Nov 2011 10:55:21 -0500" -->
<!-- isosent="20111111155521" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Type struct question" -->
<!-- id="BD434383-8433-46D2-A182-CE1D7764AA1A_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAGnxGJ069-rshxfMPrvbN4MdLhDzFQzJ+T+Y-QrFCY9kMrfbbQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Type struct question<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-11 10:55:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17759.php">Ioannis Papadopoulos: "Re: [OMPI users] Process Migration"</a>
<li><strong>Previous message:</strong> <a href="17757.php">Thomas Anderson: "[OMPI users] Type struct question"</a>
<li><strong>In reply to:</strong> <a href="17757.php">Thomas Anderson: "[OMPI users] Type struct question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 11, 2011, at 06:20 , Thomas Anderson wrote:
<br>
<p><span class="quotelev1">&gt; I read doc explaining struct at
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/doc/v1.4/man3/MPI_Type_struct.3.php">http://www.open-mpi.org/doc/v1.4/man3/MPI_Type_struct.3.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I haven't used mpi so I have a newbie question.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In the example function MPI_Type_struct(3, {2, 1, 3}, {0, 16, 26},
</span><br>
<span class="quotelev1">&gt; {MPI_FLOAT, type1, MPI_CHAR} ) is executed where type1 is consisted of
</span><br>
<span class="quotelev1">&gt; {(double,0)(char,8)}. The user defined datatype has extent 16 with
</span><br>
<span class="quotelev1">&gt; displacement at 16. However, the third block starts from displacement
</span><br>
<span class="quotelev1">&gt; 26. This seems to me the end of type1 (at 32) would overlap the
</span><br>
<span class="quotelev1">&gt; displacement of MPI_CHAR (at 26). How does MPI solve this issue? Do
</span><br>
<span class="quotelev1">&gt; they simply ignore the rest space because it is only char type in
</span><br>
<span class="quotelev1">&gt; type1? Or if the type1 is defined by {(double, 0) (double, 8)}, won't
</span><br>
<span class="quotelev1">&gt; the data in the second block be truncated?
</span><br>
<p>If the overlap is on the gaps around the datatype, it is not that a big deal. I do not know how the other MPI libraries deal with this situation, but in Open MPI as long as there is no real overlap (in terms of real data) there will be no complaints from the library.
<br>
<p>Your type1 contains the char at displacement 8. As, in the upper datatype, you start the type1 at position 16, the last real data will be the char at displacement 24, which is earlier than the double at displacement 26. So there is no overlap in this datatype.
<br>
<p>If I dump with Open MPI this datatype, I get the following description:
<br>
<p>Datatype 0x867270 id 69 size 20 align 8 opal_id 0 length 9 used 4
<br>
true_lb 0 true_ub 29 (true_extent 29) lb 0 ub 32 (extent 32)
<br>
nbElems 7 loops 0 flags 100 ()-------GD--[---][---]
<br>
&nbsp;&nbsp;&nbsp;contain OPAL_INT1 OPAL_FLOAT4 OPAL_FLOAT8 
<br>
--C---P-D--[---][---]    OPAL_FLOAT4 count 2 disp 0x0 (0) extent 4 (size 8)
<br>
--C---P-D--[---][---]    OPAL_FLOAT8 count 1 disp 0x10 (16) extent 8 (size 8)
<br>
--C---P-D--[---][---]      OPAL_INT1 count 1 disp 0x18 (24) extent 1 (size 1)
<br>
--C---P-D--[---][---]      OPAL_INT1 count 3 disp 0x1a (26) extent 1 (size 3)
<br>
<p>which corroborate what I describe above.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17759.php">Ioannis Papadopoulos: "Re: [OMPI users] Process Migration"</a>
<li><strong>Previous message:</strong> <a href="17757.php">Thomas Anderson: "[OMPI users] Type struct question"</a>
<li><strong>In reply to:</strong> <a href="17757.php">Thomas Anderson: "[OMPI users] Type struct question"</a>
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
