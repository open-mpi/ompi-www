<?
$subject_val = "Re: [OMPI users] Strange behavior of OMPI 1.8.3";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  7 00:16:36 2014" -->
<!-- isoreceived="20141007041636" -->
<!-- sent="Mon, 6 Oct 2014 23:16:35 -0500" -->
<!-- isosent="20141007041635" -->
<!-- name="Michael Thomadakis" -->
<!-- email="drmichaelt7777_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Strange behavior of OMPI 1.8.3" -->
<!-- id="CA+OO3AXyasKgnDBzOu+XqW8fb4WWWZ4-FGRr1c=CLfMDxfxmhA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAF1Cqj76-i0wng7L5g1PLnSt3ue-WRSoy5-_J+-OoEOZ0wPDfw_at_mail.gmail.com" -->
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
<strong>From:</strong> Michael Thomadakis (<em>drmichaelt7777_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-07 00:16:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25474.php">Ralph Castain: "Re: [OMPI users] Update/patch to check/opal_check_pmi.m4"</a>
<li><strong>Previous message:</strong> <a href="25472.php">Howard Pritchard: "Re: [OMPI users] Strange behavior of OMPI 1.8.3"</a>
<li><strong>In reply to:</strong> <a href="25472.php">Howard Pritchard: "Re: [OMPI users] Strange behavior of OMPI 1.8.3"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Howard,
<br>
<p>We have NOT defined IPv6 on the nodes.
<br>
<p><p>Actually I was looking at the location of the code that complains and I
<br>
also saw references to IPv6 sockets.
<br>
<p>Thanks a lot for the suggestion! I'll try this out tomorrow.
<br>
<p>Regards
<br>
Michael
<br>
<p>On Mon, Oct 6, 2014 at 11:07 PM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Hi Michael,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you do not include --enable-ipv6 in the config line, do you still
</span><br>
<span class="quotelev1">&gt; observe the problem?
</span><br>
<span class="quotelev1">&gt; Is it possible that one or more interfaces on nodes H1 and H2 do not have
</span><br>
<span class="quotelev1">&gt; ipv6 enabled?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2014-10-06 16:51 GMT-06:00 Michael Thomadakis &lt;drmichaelt7777_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've configured OpenMPI1.8.3 with the following command line
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ AXFLAGS=&quot;-xSSE4.2 -axAVX,CORE-AVX-I,CORE-AVX2&quot;
</span><br>
<span class="quotelev2">&gt;&gt; $ myFLAGS=&quot;-O2 ${AXFLAGS}&quot; ;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ ./configure --prefix=${proot} \
</span><br>
<span class="quotelev2">&gt;&gt;     --with-lsf \
</span><br>
<span class="quotelev2">&gt;&gt;     --with-cma \
</span><br>
<span class="quotelev2">&gt;&gt;     --enable-peruse --enable-branch-probabilities \
</span><br>
<span class="quotelev2">&gt;&gt;     --enable-mpi-fortran=all \
</span><br>
<span class="quotelev2">&gt;&gt;     --enable-cxx-exceptions \
</span><br>
<span class="quotelev2">&gt;&gt;     --enable-ipv6 \
</span><br>
<span class="quotelev2">&gt;&gt;     --enable-sparse-groups \
</span><br>
<span class="quotelev2">&gt;&gt;     --with-threads=posix \
</span><br>
<span class="quotelev2">&gt;&gt;     --enable-mpi-thread-multiple \
</span><br>
<span class="quotelev2">&gt;&gt;     --enable-openib-connectx-xrc \
</span><br>
<span class="quotelev2">&gt;&gt;     --enable-mtl-portals4-flow-control \
</span><br>
<span class="quotelev2">&gt;&gt;     --with-hwloc=internal \
</span><br>
<span class="quotelev2">&gt;&gt;     --enable-orterun-prefix-by-default \
</span><br>
<span class="quotelev2">&gt;&gt;     --with-ident-string=&quot;MikeT_15.0&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;     CC=icc CFLAGS=&quot;$myFLAGS&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;     CXX=icpc CXXFLAGS=&quot;$myFLAGS&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;     F77=ifort FFLAGS=&quot;$myFLAGS&quot; FC=ifort FCFLAGS=&quot;$myFLAGS&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;     LIBS=&quot;-lnsl&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;     &amp;&amp; make -j 8 &amp;&amp; make install
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; but when I run it with
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun --bind-to core --map-by core -mca mpi_show_mca_params all --host
</span><br>
<span class="quotelev2">&gt;&gt; H1,H2 -np 2
</span><br>
<span class="quotelev2">&gt;&gt; ~/performance/analysis/networks/Intel64_SandyBridge/HPCI/OMB_4.3.0/ompi_1.8.2/cpu/osu-micro-benchmarks-4.3/libexec/osu-micro-benchmarks/mpi/one-sided/osu_put_bibw
</span><br>
<span class="quotelev2">&gt;&gt; H H
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am getting
</span><br>
<span class="quotelev2">&gt;&gt; &quot;
</span><br>
<span class="quotelev2">&gt;&gt; [H1:33580] [[41149,0],0] ORTE_ERROR_LOG: Address family not supported by
</span><br>
<span class="quotelev2">&gt;&gt; protocol in file oob_tcp_listener.c at line 120
</span><br>
<span class="quotelev2">&gt;&gt; [h2:33580] [[41149,0],0] ORTE_ERROR_LOG: Address family not supported by
</span><br>
<span class="quotelev2">&gt;&gt; protocol in file oob_tcp_component.c at line 584
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any suggestions ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks !
</span><br>
<span class="quotelev2">&gt;&gt; Michael
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/10/25468.php">http://www.open-mpi.org/community/lists/users/2014/10/25468.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/10/25472.php">http://www.open-mpi.org/community/lists/users/2014/10/25472.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25473/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25474.php">Ralph Castain: "Re: [OMPI users] Update/patch to check/opal_check_pmi.m4"</a>
<li><strong>Previous message:</strong> <a href="25472.php">Howard Pritchard: "Re: [OMPI users] Strange behavior of OMPI 1.8.3"</a>
<li><strong>In reply to:</strong> <a href="25472.php">Howard Pritchard: "Re: [OMPI users] Strange behavior of OMPI 1.8.3"</a>
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
