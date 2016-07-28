<?
$subject_val = "Re: [OMPI users] Strange behavior of OMPI 1.8.3";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  7 00:07:07 2014" -->
<!-- isoreceived="20141007040707" -->
<!-- sent="Mon, 6 Oct 2014 22:07:06 -0600" -->
<!-- isosent="20141007040706" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Strange behavior of OMPI 1.8.3" -->
<!-- id="CAF1Cqj76-i0wng7L5g1PLnSt3ue-WRSoy5-_J+-OoEOZ0wPDfw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CA+OO3AXho=9-vywtwb0RL_nd1ba-bof6Se_zcOfO3Us5sDdLqw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Strange behavior of OMPI 1.8.3<br>
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-07 00:07:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25473.php">Michael Thomadakis: "Re: [OMPI users] Strange behavior of OMPI 1.8.3"</a>
<li><strong>Previous message:</strong> <a href="25471.php">Ralph Castain: "Re: [OMPI users] Update/patch to check/opal_check_pmi.m4"</a>
<li><strong>In reply to:</strong> <a href="25468.php">Michael Thomadakis: "[OMPI users] Strange behavior of OMPI 1.8.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25473.php">Michael Thomadakis: "Re: [OMPI users] Strange behavior of OMPI 1.8.3"</a>
<li><strong>Reply:</strong> <a href="25473.php">Michael Thomadakis: "Re: [OMPI users] Strange behavior of OMPI 1.8.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Michael,
<br>
<p>If you do not include --enable-ipv6 in the config line, do you still
<br>
observe the problem?
<br>
Is it possible that one or more interfaces on nodes H1 and H2 do not have
<br>
ipv6 enabled?
<br>
<p>Howard
<br>
<p><p>2014-10-06 16:51 GMT-06:00 Michael Thomadakis &lt;drmichaelt7777_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've configured OpenMPI1.8.3 with the following command line
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ AXFLAGS=&quot;-xSSE4.2 -axAVX,CORE-AVX-I,CORE-AVX2&quot;
</span><br>
<span class="quotelev1">&gt; $ myFLAGS=&quot;-O2 ${AXFLAGS}&quot; ;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ ./configure --prefix=${proot} \
</span><br>
<span class="quotelev1">&gt;     --with-lsf \
</span><br>
<span class="quotelev1">&gt;     --with-cma \
</span><br>
<span class="quotelev1">&gt;     --enable-peruse --enable-branch-probabilities \
</span><br>
<span class="quotelev1">&gt;     --enable-mpi-fortran=all \
</span><br>
<span class="quotelev1">&gt;     --enable-cxx-exceptions \
</span><br>
<span class="quotelev1">&gt;     --enable-ipv6 \
</span><br>
<span class="quotelev1">&gt;     --enable-sparse-groups \
</span><br>
<span class="quotelev1">&gt;     --with-threads=posix \
</span><br>
<span class="quotelev1">&gt;     --enable-mpi-thread-multiple \
</span><br>
<span class="quotelev1">&gt;     --enable-openib-connectx-xrc \
</span><br>
<span class="quotelev1">&gt;     --enable-mtl-portals4-flow-control \
</span><br>
<span class="quotelev1">&gt;     --with-hwloc=internal \
</span><br>
<span class="quotelev1">&gt;     --enable-orterun-prefix-by-default \
</span><br>
<span class="quotelev1">&gt;     --with-ident-string=&quot;MikeT_15.0&quot; \
</span><br>
<span class="quotelev1">&gt;     CC=icc CFLAGS=&quot;$myFLAGS&quot; \
</span><br>
<span class="quotelev1">&gt;     CXX=icpc CXXFLAGS=&quot;$myFLAGS&quot; \
</span><br>
<span class="quotelev1">&gt;     F77=ifort FFLAGS=&quot;$myFLAGS&quot; FC=ifort FCFLAGS=&quot;$myFLAGS&quot; \
</span><br>
<span class="quotelev1">&gt;     LIBS=&quot;-lnsl&quot; \
</span><br>
<span class="quotelev1">&gt;     &amp;&amp; make -j 8 &amp;&amp; make install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but when I run it with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpirun --bind-to core --map-by core -mca mpi_show_mca_params all --host
</span><br>
<span class="quotelev1">&gt; H1,H2 -np 2
</span><br>
<span class="quotelev1">&gt; ~/performance/analysis/networks/Intel64_SandyBridge/HPCI/OMB_4.3.0/ompi_1.8.2/cpu/osu-micro-benchmarks-4.3/libexec/osu-micro-benchmarks/mpi/one-sided/osu_put_bibw
</span><br>
<span class="quotelev1">&gt; H H
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am getting
</span><br>
<span class="quotelev1">&gt; &quot;
</span><br>
<span class="quotelev1">&gt; [H1:33580] [[41149,0],0] ORTE_ERROR_LOG: Address family not supported by
</span><br>
<span class="quotelev1">&gt; protocol in file oob_tcp_listener.c at line 120
</span><br>
<span class="quotelev1">&gt; [h2:33580] [[41149,0],0] ORTE_ERROR_LOG: Address family not supported by
</span><br>
<span class="quotelev1">&gt; protocol in file oob_tcp_component.c at line 584
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any suggestions ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks !
</span><br>
<span class="quotelev1">&gt; Michael
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/10/25468.php">http://www.open-mpi.org/community/lists/users/2014/10/25468.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25472/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25473.php">Michael Thomadakis: "Re: [OMPI users] Strange behavior of OMPI 1.8.3"</a>
<li><strong>Previous message:</strong> <a href="25471.php">Ralph Castain: "Re: [OMPI users] Update/patch to check/opal_check_pmi.m4"</a>
<li><strong>In reply to:</strong> <a href="25468.php">Michael Thomadakis: "[OMPI users] Strange behavior of OMPI 1.8.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25473.php">Michael Thomadakis: "Re: [OMPI users] Strange behavior of OMPI 1.8.3"</a>
<li><strong>Reply:</strong> <a href="25473.php">Michael Thomadakis: "Re: [OMPI users] Strange behavior of OMPI 1.8.3"</a>
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
