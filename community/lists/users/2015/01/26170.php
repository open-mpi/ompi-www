<?
$subject_val = "Re: [OMPI users] error building openmpi-dev-685-g881b1dc on Soalris 10";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 13 06:05:56 2015" -->
<!-- isoreceived="20150113110556" -->
<!-- sent="Tue, 13 Jan 2015 20:05:59 +0900" -->
<!-- isosent="20150113110559" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error building openmpi-dev-685-g881b1dc on Soalris 10" -->
<!-- id="54B4FC17.3000007_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201501121154.t0CBs6FO005078_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] error building openmpi-dev-685-g881b1dc on Soalris 10<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-13 06:05:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26171.php">Diego Avesani: "[OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<li><strong>Previous message:</strong> <a href="26169.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<li><strong>In reply to:</strong> <a href="26165.php">Siegmar Gross: "[OMPI users] error building openmpi-dev-685-g881b1dc on Soalris 10"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Siegmar,
<br>
<p>could you please try again with adding '-D_STDC_C99' to your CFLAGS ?
<br>
<p>Thanks and regards,
<br>
<p>Gilles
<br>
<p>On 2015/01/12 20:54, Siegmar Gross wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; today I tried to build openmpi-dev-685-g881b1dc on my machines
</span><br>
<span class="quotelev1">&gt; (Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE Linux 12.1
</span><br>
<span class="quotelev1">&gt; x86_64) with gcc-4.9.2 and the new Solaris Studio 12.4 compilers.
</span><br>
<span class="quotelev1">&gt; I succedded on Linux but failed on both Solaris systems for both
</span><br>
<span class="quotelev1">&gt; compilers with the same error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;   CC       adio/common/ad_prealloc.lo
</span><br>
<span class="quotelev1">&gt;   CC       adio/common/ad_read.lo
</span><br>
<span class="quotelev1">&gt; &quot;/usr/include/sys/feature_tests.h&quot;, line 337: #error: &quot;Compiler or options invalid for pre-UNIX 03 
</span><br>
<span class="quotelev1">&gt; X/Open applications and pre-2001 POSIX applications&quot;
</span><br>
<span class="quotelev1">&gt; cc: acomp failed for 
</span><br>
<span class="quotelev1">&gt; ../../../../../../openmpi-dev-685-g881b1dc/ompi/mca/io/romio/romio/adio/common/ad_read.c
</span><br>
<span class="quotelev1">&gt; make[4]: *** [adio/common/ad_read.lo] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;   CC       adio/common/ad_read.lo
</span><br>
<span class="quotelev1">&gt; In file included from /usr/include/unistd.h:18:0,
</span><br>
<span class="quotelev1">&gt;                  from 
</span><br>
<span class="quotelev1">&gt; ../../../../../../openmpi-dev-685-g881b1dc/ompi/mca/io/romio/romio/adio/common/ad_read.c:16:
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/gcc-4.9.2/lib/gcc/sparc-sun-solaris2.10/4.9.2/include-fixed/sys/feature_
</span><br>
<span class="quotelev1">&gt; tests.h:346:2: error: #error &quot;Compiler or options invalid for pre-UNIX 03 X/Open applications     
</span><br>
<span class="quotelev1">&gt; and pre-2001 POSIX applications&quot;
</span><br>
<span class="quotelev1">&gt;  #error &quot;Compiler or options invalid for pre-UNIX 03 X/Open applications \
</span><br>
<span class="quotelev1">&gt;   ^
</span><br>
<span class="quotelev1">&gt; make[4]: *** [adio/common/ad_read.lo] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would be grateful if somebody can fix the problem. Thank you
</span><br>
<span class="quotelev1">&gt; very much in advance
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Siegmar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/01/26165.php">http://www.open-mpi.org/community/lists/users/2015/01/26165.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26171.php">Diego Avesani: "[OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<li><strong>Previous message:</strong> <a href="26169.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<li><strong>In reply to:</strong> <a href="26165.php">Siegmar Gross: "[OMPI users] error building openmpi-dev-685-g881b1dc on Soalris 10"</a>
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
