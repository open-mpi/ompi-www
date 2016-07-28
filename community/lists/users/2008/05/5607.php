<?
$subject_val = "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  5 14:39:45 2008" -->
<!-- isoreceived="20080505183945" -->
<!-- sent="Mon, 5 May 2008 11:33:45 -0700" -->
<!-- isosent="20080505183345" -->
<!-- name="Doug Reeder" -->
<!-- email="dlr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard" -->
<!-- id="22C3FE0A-B542-40B0-95A6-CD300361FDE1_at_rain.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6FA7C116-FD3C-4548-925C-823FE4716DA9_at_rit.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard<br>
<strong>From:</strong> Doug Reeder (<em>dlr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-05 14:33:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5608.php">Linwei Wang: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<li><strong>Previous message:</strong> <a href="5606.php">Linwei Wang: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<li><strong>In reply to:</strong> <a href="5606.php">Linwei Wang: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5608.php">Linwei Wang: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<li><strong>Reply:</strong> <a href="5608.php">Linwei Wang: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Linwei,
<br>
<p>Have you tried using -funderscoring with gfortran. I don't think the  
<br>
trouble you are having is caused by having g77 and gfortran both  
<br>
installed.
<br>
<p>Do you know where the unreferenced symbols (_s_wsle, _e_wsle, etc )  
<br>
are supposed to be coming from. If they are in your fortran programs  
<br>
then using -funderscoring should help.
<br>
<p>Doug Reeder
<br>
On May 5, 2008, at 11:21 AM, Linwei Wang wrote:
<br>
<p><span class="quotelev1">&gt; Dear Reeder,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    I've tried add gfortran flag  &quot;-fno-underscoring&quot;, but the same
</span><br>
<span class="quotelev1">&gt; errors persist...
</span><br>
<span class="quotelev1">&gt; Is that possible because that I have both g77 and gfortran in my
</span><br>
<span class="quotelev1">&gt; computer?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Best,
</span><br>
<span class="quotelev1">&gt;    Linwei
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 5, 2008, at 1:17 PM, Doug Reeder wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Linwei,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there a problem with trailing underscores. Are you linking c/c++
</span><br>
<span class="quotelev2">&gt;&gt; files with fortran. Do the _s_wsle family members need to have a
</span><br>
<span class="quotelev2">&gt;&gt; trailing underscore
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; where are the unrefernced symbols supposed to be coming from. If they
</span><br>
<span class="quotelev2">&gt;&gt; have a trailing underscore in their names you probably need to add a
</span><br>
<span class="quotelev2">&gt;&gt; command line flag to you fortran command to append the underscore.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Doug Reeder
</span><br>
<span class="quotelev2">&gt;&gt; On May 5, 2008, at 10:12 AM, Linwei Wang wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear Dr. Simon,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do I need to remove g77 from my computer then? Since after  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; installing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gfortran (for Leopard), there is some link problem with gfortran..
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When I try to build some routines in the BLACS, it gives error like:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Undefined symbols:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   &quot;_s_wsle&quot;, referenced from:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       _MAIN__ in tc_fCsameF77.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       _MAIN__ in tc_fCsameF77.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       _MAIN__ in tc_fCsameF77.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       _MAIN__ in tc_fCsameF77.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       _MAIN__ in tc_fCsameF77.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       _MAIN__ in tc_fCsameF77.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       _MAIN__ in tc_fCsameF77.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   &quot;_e_wsle&quot;, referenced from:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       _MAIN__ in tc_fCsameF77.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       _MAIN__ in tc_fCsameF77.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       _MAIN__ in tc_fCsameF77.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       _MAIN__ in tc_fCsameF77.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       _MAIN__ in tc_fCsameF77.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       _MAIN__ in tc_fCsameF77.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   &quot;_do_lio&quot;, referenced from:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       _MAIN__ in tc_fCsameF77.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       _MAIN__ in tc_fCsameF77.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       _MAIN__ in tc_fCsameF77.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       _MAIN__ in tc_fCsameF77.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       _MAIN__ in tc_fCsameF77.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       _MAIN__ in tc_fCsameF77.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   &quot;_s_stop&quot;, referenced from:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       _MAIN__ in tc_fCsameF77.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ld: symbol(s) not found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for some which is successfully built, it can not be run either,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; giving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; errors like:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; iris-wl03:14541] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [iris-wl03:14541] Signal: Bus error (10)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [iris-wl03:14541] Signal code:  (2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [iris-wl03:14541] Failing at address: 0xe3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [iris-wl03:14541] [ 0] 2   libSystem.B.dylib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0x955f45eb _sigtramp + 43
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [iris-wl03:14541] [ 1] 3   ???
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0xffffffff 0x0 + 4294967295
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [iris-wl03:14541] [ 2] 4   xcmpi_sane
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0x00001cc3 main + 51
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [iris-wl03:14541] [ 3] 5   xcmpi_sane
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0x00001c56 start + 54
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [iris-wl03:14541] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun noticed that job rank 0 with PID 14541 on node iris-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wl03.rit.edu exited on signal 10 (Bus error).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The second problem happens when I use g77 too, but there were no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; linking problems with g77...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for any help!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Linwei
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On May 2, 2008, at 7:04 AM, Christian Simon wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dear Linwei,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 1 mai 08, at 20:32, Linwei Wang wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; other type at (1) [info -f g77 M GLOBALS]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What compiler are you using ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dr. Christian SIMON
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Laboratoire LI2C-UMR7612
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Universite Pierre et Marie Curie
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Case 51
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 4 Place Jussieu
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 75252 Paris Cedex 05
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; France/Europe
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="5608.php">Linwei Wang: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<li><strong>Previous message:</strong> <a href="5606.php">Linwei Wang: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<li><strong>In reply to:</strong> <a href="5606.php">Linwei Wang: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5608.php">Linwei Wang: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<li><strong>Reply:</strong> <a href="5608.php">Linwei Wang: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
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
