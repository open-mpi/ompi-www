<?
$subject_val = "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  5 13:13:07 2008" -->
<!-- isoreceived="20080505171307" -->
<!-- sent="Mon, 5 May 2008 13:12:57 -0400" -->
<!-- isosent="20080505171257" -->
<!-- name="Linwei Wang" -->
<!-- email="lxw4393_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard" -->
<!-- id="A9388187-D2EC-41D2-99C9-1E5DF4E123F4_at_rit.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="A1E91B95-F47E-4015-B2F8-D6EA278374C4_at_ccr.jussieu.fr" -->
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
<strong>Date:</strong> 2008-05-05 13:12:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5603.php">Doug Reeder: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<li><strong>Previous message:</strong> <a href="5601.php">Jeff Squyres: "Re: [OMPI users] machines swapping in running job[Scanned]"</a>
<li><strong>In reply to:</strong> <a href="5591.php">Christian Simon: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5603.php">Doug Reeder: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<li><strong>Reply:</strong> <a href="5603.php">Doug Reeder: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Dr. Simon,
<br>
<p>Do I need to remove g77 from my computer then? Since after installing  
<br>
gfortran (for Leopard), there is some link problem with gfortran..
<br>
When I try to build some routines in the BLACS, it gives error like:
<br>
<p>Undefined symbols:
<br>
&nbsp;&nbsp;&nbsp;&quot;_s_wsle&quot;, referenced from:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_MAIN__ in tc_fCsameF77.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_MAIN__ in tc_fCsameF77.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_MAIN__ in tc_fCsameF77.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_MAIN__ in tc_fCsameF77.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_MAIN__ in tc_fCsameF77.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_MAIN__ in tc_fCsameF77.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_MAIN__ in tc_fCsameF77.o
<br>
&nbsp;&nbsp;&nbsp;&quot;_e_wsle&quot;, referenced from:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_MAIN__ in tc_fCsameF77.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_MAIN__ in tc_fCsameF77.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_MAIN__ in tc_fCsameF77.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_MAIN__ in tc_fCsameF77.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_MAIN__ in tc_fCsameF77.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_MAIN__ in tc_fCsameF77.o
<br>
&nbsp;&nbsp;&nbsp;&quot;_do_lio&quot;, referenced from:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_MAIN__ in tc_fCsameF77.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_MAIN__ in tc_fCsameF77.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_MAIN__ in tc_fCsameF77.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_MAIN__ in tc_fCsameF77.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_MAIN__ in tc_fCsameF77.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_MAIN__ in tc_fCsameF77.o
<br>
&nbsp;&nbsp;&nbsp;&quot;_s_stop&quot;, referenced from:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_MAIN__ in tc_fCsameF77.o
<br>
ld: symbol(s) not found
<br>
collect2: ld returned 1 exit status
<br>
<p>for some which is successfully built, it can not be run either, giving  
<br>
errors like:
<br>
<p>iris-wl03:14541] *** Process received signal ***
<br>
[iris-wl03:14541] Signal: Bus error (10)
<br>
[iris-wl03:14541] Signal code:  (2)
<br>
[iris-wl03:14541] Failing at address: 0xe3
<br>
[iris-wl03:14541] [ 0] 2   libSystem.B.dylib                    
<br>
0x955f45eb _sigtramp + 43
<br>
[iris-wl03:14541] [ 1] 3   ???                                  
<br>
0xffffffff 0x0 + 4294967295
<br>
[iris-wl03:14541] [ 2] 4   xcmpi_sane                           
<br>
0x00001cc3 main + 51
<br>
[iris-wl03:14541] [ 3] 5   xcmpi_sane                           
<br>
0x00001c56 start + 54
<br>
[iris-wl03:14541] *** End of error message ***
<br>
mpirun noticed that job rank 0 with PID 14541 on node iris- 
<br>
wl03.rit.edu exited on signal 10 (Bus error).
<br>
<p><p><p>The second problem happens when I use g77 too, but there were no  
<br>
linking problems with g77...
<br>
<p>Thanks for any help!
<br>
<p>Best,
<br>
Linwei
<br>
<p><p>On May 2, 2008, at 7:04 AM, Christian Simon wrote:
<br>
<p><span class="quotelev1">&gt; Dear Linwei,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 1 mai 08, at 20:32, Linwei Wang wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; other type at (1) [info -f g77 M GLOBALS]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What compiler are you using ?
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Dr. Christian SIMON
</span><br>
<span class="quotelev1">&gt; Laboratoire LI2C-UMR7612
</span><br>
<span class="quotelev1">&gt; Universite Pierre et Marie Curie
</span><br>
<span class="quotelev1">&gt; Case 51
</span><br>
<span class="quotelev1">&gt; 4 Place Jussieu
</span><br>
<span class="quotelev1">&gt; 75252 Paris Cedex 05
</span><br>
<span class="quotelev1">&gt; France/Europe
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
<li><strong>Next message:</strong> <a href="5603.php">Doug Reeder: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<li><strong>Previous message:</strong> <a href="5601.php">Jeff Squyres: "Re: [OMPI users] machines swapping in running job[Scanned]"</a>
<li><strong>In reply to:</strong> <a href="5591.php">Christian Simon: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5603.php">Doug Reeder: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<li><strong>Reply:</strong> <a href="5603.php">Doug Reeder: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
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
