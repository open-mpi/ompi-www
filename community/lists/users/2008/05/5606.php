<?
$subject_val = "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  5 14:21:40 2008" -->
<!-- isoreceived="20080505182140" -->
<!-- sent="Mon, 5 May 2008 14:21:31 -0400" -->
<!-- isosent="20080505182131" -->
<!-- name="Linwei Wang" -->
<!-- email="lxw4393_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard" -->
<!-- id="6FA7C116-FD3C-4548-925C-823FE4716DA9_at_rit.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="8CF5EB7C-7367-4947-BC62-76B949A3C262_at_rain.org" -->
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
<strong>From:</strong> Linwei Wang (<em>lxw4393_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-05 14:21:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5607.php">Doug Reeder: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<li><strong>Previous message:</strong> <a href="5605.php">Jeff Squyres: "Re: [OMPI users] Enabling progress thread"</a>
<li><strong>In reply to:</strong> <a href="5603.php">Doug Reeder: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5607.php">Doug Reeder: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<li><strong>Reply:</strong> <a href="5607.php">Doug Reeder: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Reeder,
<br>
<p>&nbsp;&nbsp;&nbsp;I've tried add gfortran flag  &quot;-fno-underscoring&quot;, but the same  
<br>
errors persist...
<br>
Is that possible because that I have both g77 and gfortran in my  
<br>
computer?
<br>
<p>&nbsp;&nbsp;&nbsp;Best,
<br>
&nbsp;&nbsp;&nbsp;Linwei
<br>
<p>On May 5, 2008, at 1:17 PM, Doug Reeder wrote:
<br>
<p><span class="quotelev1">&gt; Linwei,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a problem with trailing underscores. Are you linking c/c++
</span><br>
<span class="quotelev1">&gt; files with fortran. Do the _s_wsle family members need to have a
</span><br>
<span class="quotelev1">&gt; trailing underscore
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; where are the unrefernced symbols supposed to be coming from. If they
</span><br>
<span class="quotelev1">&gt; have a trailing underscore in their names you probably need to add a
</span><br>
<span class="quotelev1">&gt; command line flag to you fortran command to append the underscore.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Doug Reeder
</span><br>
<span class="quotelev1">&gt; On May 5, 2008, at 10:12 AM, Linwei Wang wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear Dr. Simon,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Do I need to remove g77 from my computer then? Since after installing
</span><br>
<span class="quotelev2">&gt;&gt; gfortran (for Leopard), there is some link problem with gfortran..
</span><br>
<span class="quotelev2">&gt;&gt; When I try to build some routines in the BLACS, it gives error like:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Undefined symbols:
</span><br>
<span class="quotelev2">&gt;&gt;   &quot;_s_wsle&quot;, referenced from:
</span><br>
<span class="quotelev2">&gt;&gt;       _MAIN__ in tc_fCsameF77.o
</span><br>
<span class="quotelev2">&gt;&gt;       _MAIN__ in tc_fCsameF77.o
</span><br>
<span class="quotelev2">&gt;&gt;       _MAIN__ in tc_fCsameF77.o
</span><br>
<span class="quotelev2">&gt;&gt;       _MAIN__ in tc_fCsameF77.o
</span><br>
<span class="quotelev2">&gt;&gt;       _MAIN__ in tc_fCsameF77.o
</span><br>
<span class="quotelev2">&gt;&gt;       _MAIN__ in tc_fCsameF77.o
</span><br>
<span class="quotelev2">&gt;&gt;       _MAIN__ in tc_fCsameF77.o
</span><br>
<span class="quotelev2">&gt;&gt;   &quot;_e_wsle&quot;, referenced from:
</span><br>
<span class="quotelev2">&gt;&gt;       _MAIN__ in tc_fCsameF77.o
</span><br>
<span class="quotelev2">&gt;&gt;       _MAIN__ in tc_fCsameF77.o
</span><br>
<span class="quotelev2">&gt;&gt;       _MAIN__ in tc_fCsameF77.o
</span><br>
<span class="quotelev2">&gt;&gt;       _MAIN__ in tc_fCsameF77.o
</span><br>
<span class="quotelev2">&gt;&gt;       _MAIN__ in tc_fCsameF77.o
</span><br>
<span class="quotelev2">&gt;&gt;       _MAIN__ in tc_fCsameF77.o
</span><br>
<span class="quotelev2">&gt;&gt;   &quot;_do_lio&quot;, referenced from:
</span><br>
<span class="quotelev2">&gt;&gt;       _MAIN__ in tc_fCsameF77.o
</span><br>
<span class="quotelev2">&gt;&gt;       _MAIN__ in tc_fCsameF77.o
</span><br>
<span class="quotelev2">&gt;&gt;       _MAIN__ in tc_fCsameF77.o
</span><br>
<span class="quotelev2">&gt;&gt;       _MAIN__ in tc_fCsameF77.o
</span><br>
<span class="quotelev2">&gt;&gt;       _MAIN__ in tc_fCsameF77.o
</span><br>
<span class="quotelev2">&gt;&gt;       _MAIN__ in tc_fCsameF77.o
</span><br>
<span class="quotelev2">&gt;&gt;   &quot;_s_stop&quot;, referenced from:
</span><br>
<span class="quotelev2">&gt;&gt;       _MAIN__ in tc_fCsameF77.o
</span><br>
<span class="quotelev2">&gt;&gt; ld: symbol(s) not found
</span><br>
<span class="quotelev2">&gt;&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; for some which is successfully built, it can not be run either,  
</span><br>
<span class="quotelev2">&gt;&gt; giving
</span><br>
<span class="quotelev2">&gt;&gt; errors like:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; iris-wl03:14541] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [iris-wl03:14541] Signal: Bus error (10)
</span><br>
<span class="quotelev2">&gt;&gt; [iris-wl03:14541] Signal code:  (2)
</span><br>
<span class="quotelev2">&gt;&gt; [iris-wl03:14541] Failing at address: 0xe3
</span><br>
<span class="quotelev2">&gt;&gt; [iris-wl03:14541] [ 0] 2   libSystem.B.dylib
</span><br>
<span class="quotelev2">&gt;&gt; 0x955f45eb _sigtramp + 43
</span><br>
<span class="quotelev2">&gt;&gt; [iris-wl03:14541] [ 1] 3   ???
</span><br>
<span class="quotelev2">&gt;&gt; 0xffffffff 0x0 + 4294967295
</span><br>
<span class="quotelev2">&gt;&gt; [iris-wl03:14541] [ 2] 4   xcmpi_sane
</span><br>
<span class="quotelev2">&gt;&gt; 0x00001cc3 main + 51
</span><br>
<span class="quotelev2">&gt;&gt; [iris-wl03:14541] [ 3] 5   xcmpi_sane
</span><br>
<span class="quotelev2">&gt;&gt; 0x00001c56 start + 54
</span><br>
<span class="quotelev2">&gt;&gt; [iris-wl03:14541] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that job rank 0 with PID 14541 on node iris-
</span><br>
<span class="quotelev2">&gt;&gt; wl03.rit.edu exited on signal 10 (Bus error).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The second problem happens when I use g77 too, but there were no
</span><br>
<span class="quotelev2">&gt;&gt; linking problems with g77...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for any help!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best,
</span><br>
<span class="quotelev2">&gt;&gt; Linwei
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 2, 2008, at 7:04 AM, Christian Simon wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear Linwei,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 1 mai 08, at 20:32, Linwei Wang wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; other type at (1) [info -f g77 M GLOBALS]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What compiler are you using ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dr. Christian SIMON
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Laboratoire LI2C-UMR7612
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Universite Pierre et Marie Curie
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Case 51
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4 Place Jussieu
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 75252 Paris Cedex 05
</span><br>
<span class="quotelev3">&gt;&gt;&gt; France/Europe
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
<li><strong>Next message:</strong> <a href="5607.php">Doug Reeder: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<li><strong>Previous message:</strong> <a href="5605.php">Jeff Squyres: "Re: [OMPI users] Enabling progress thread"</a>
<li><strong>In reply to:</strong> <a href="5603.php">Doug Reeder: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5607.php">Doug Reeder: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<li><strong>Reply:</strong> <a href="5607.php">Doug Reeder: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
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
