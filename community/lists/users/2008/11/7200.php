<?
$subject_val = "Re: [OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  3 22:19:36 2008" -->
<!-- isoreceived="20081104031936" -->
<!-- sent="Mon, 3 Nov 2008 22:19:32 -0500" -->
<!-- isosent="20081104031932" -->
<!-- name="Gustavo Seabra" -->
<!-- email="gustavo.seabra_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4" -->
<!-- id="f79359b60811031919y2b6a14bfybd0f8d9079e8ecfc_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="47541.61.69.3.161.1225763990.squirrel_at_webmail.chalmers.se" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4<br>
<strong>From:</strong> Gustavo Seabra (<em>gustavo.seabra_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-03 22:19:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7201.php">Terry Frankcombe: "Re: [OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4"</a>
<li><strong>Previous message:</strong> <a href="7199.php">Terry Frankcombe: "Re: [OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4"</a>
<li><strong>In reply to:</strong> <a href="7199.php">Terry Frankcombe: "Re: [OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7201.php">Terry Frankcombe: "Re: [OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4"</a>
<li><strong>Reply:</strong> <a href="7201.php">Terry Frankcombe: "Re: [OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Nov 3, 2008 at 8:59 PM, Terry Frankcombe wrote:
<br>
<span class="quotelev2">&gt;&gt; On Nov 3, 2008, at 3:36 PM, Gustavo Seabra wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For your fortran issue, the Fortran 90 interface needs the Fortran 77
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; interface.  So you need to supply an F77 as well (the output from
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; should indicate that the F90 interface was disabled because the F77
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; interface was disabled).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is that what you mean (see below)?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ah yes -- that's another reason the f90 interface could be disabled:
</span><br>
<span class="quotelev2">&gt;&gt; if configure detects that the f77 and f90 compilers are not link-
</span><br>
<span class="quotelev2">&gt;&gt; compatible.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I thought the g95 compiler could
</span><br>
<span class="quotelev3">&gt;&gt;&gt; deal with F77 as well as F95... If so, could I just pass F77='g95'?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That would probably work (F77=g95).  I don't know the g95 compiler at
</span><br>
<span class="quotelev2">&gt;&gt; all, so I don't know if it also accepts Fortran-77-style codes.  But
</span><br>
<span class="quotelev2">&gt;&gt; if it does, then you're set.  Otherwise, specify a different F77
</span><br>
<span class="quotelev2">&gt;&gt; compiler that is link compatible with g95 and you should be good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Fortran 90 is a superset of the archaic, hamstrung, &quot;I'm too old to learn
</span><br>
<span class="quotelev1">&gt; how to program in a useful manner and I still use punched cards&quot; Fortran
</span><br>
<span class="quotelev1">&gt; 77.  All Fortran 90 compilers are Fortran 77 compilers, by definition.
</span><br>
<span class="quotelev1">&gt; Fortran 95 has a few (~5) deleted features and a few minor added features.
</span><br>
<span class="quotelev1">&gt;  I've never heard of a Fortran 95 compiler that wasn't a Fortran 90
</span><br>
<span class="quotelev1">&gt; compiler, and thus a Fortran 77 compiler.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Take g77 and throw it away.  While it's not particularly buggy, it hasn't
</span><br>
<span class="quotelev1">&gt; been maintained for years and should be out-performed by a more modern
</span><br>
<span class="quotelev1">&gt; compiler such as g95 or gfortran.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>OK, so I tried to set all my fortran compilers to g95... But for some
<br>
reason, it looks like g95 and g95 (!) compilers are not compatible...
<br>
How's that even possible? (See below)
<br>
<p>Thanks a lot,
<br>
Gustavo.
<br>
------
<br>
./configure --prefix=$MPI_HOME \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-mpi-param_check=always \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-threads=posix \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-mpi-threads \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--disable-io-romio \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-mca-no-build=memory_mallopt,maffinity,paffinity \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-contrib-no-build=vt \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FC='g95' F77='g95' F90='g95' F95='g95' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CC='gcc' CXX='g++' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FFLAGS='-O0  -fno-second-underscore'
<br>
<p>&lt;snip&gt;
<br>
*** Fortran 77 compiler
<br>
checking whether we are using the GNU Fortran 77 compiler... yes
<br>
checking whether g95 accepts -g... yes
<br>
checking if Fortran 77 compiler works... yes
<br>
checking g95 external symbol convention... single underscore
<br>
checking if C and Fortran 77 are link compatible... yes
<br>
&lt;snip&gt; (just a ton of &quot;yes&quot;-es)
<br>
<p>*** Fortran 90/95 compiler
<br>
checking whether we are using the GNU Fortran compiler... yes
<br>
checking whether g95 accepts -g... yes
<br>
checking if Fortran compiler works... yes
<br>
checking whether g95 and g95 compilers are compatible... no
<br>
configure: WARNING: *** Fortran 77 and Fortran 90 compilers are not
<br>
link compatible
<br>
configure: WARNING: *** Disabling MPI Fortran 90/95 bindings
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7201.php">Terry Frankcombe: "Re: [OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4"</a>
<li><strong>Previous message:</strong> <a href="7199.php">Terry Frankcombe: "Re: [OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4"</a>
<li><strong>In reply to:</strong> <a href="7199.php">Terry Frankcombe: "Re: [OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7201.php">Terry Frankcombe: "Re: [OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4"</a>
<li><strong>Reply:</strong> <a href="7201.php">Terry Frankcombe: "Re: [OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4"</a>
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
