<?
$subject_val = "Re: [OMPI users] Configuration error with external hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 18 01:32:08 2015" -->
<!-- isoreceived="20150318053208" -->
<!-- sent="Wed, 18 Mar 2015 05:31:48 +0000" -->
<!-- isosent="20150318053148" -->
<!-- name="Nick Papior Andersen" -->
<!-- email="nickpapior_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Configuration error with external hwloc" -->
<!-- id="CAAbhqc6CqP1unriPUR8f7zO2FX_suup6q7+1T-60uPEc3oiO8g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAF_-zRv+nK_Riob3dna5Azmgg=DXDOc6gpTK4gv9fv6poEPNwA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Configuration error with external hwloc<br>
<strong>From:</strong> Nick Papior Andersen (<em>nickpapior_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-18 01:31:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26493.php">Siegmar Gross: "[OMPI users] error building openmpi-dev-1346-gb41d2ad"</a>
<li><strong>Previous message:</strong> <a href="26491.php">Peter Gottesman: "[OMPI users] Configuration error with external hwloc"</a>
<li><strong>In reply to:</strong> <a href="26491.php">Peter Gottesman: "[OMPI users] Configuration error with external hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26494.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Configuration error with external hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As it says check the config.log for any error messages. I have not had any
<br>
problems using external hwloc on my debian boxes.
<br>
<p>2015-03-18 1:30 GMT+00:00 Peter Gottesman &lt;mygames1030_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Hey all,
</span><br>
<span class="quotelev1">&gt; I am trying to compile Open MPI on a 32bit laptop running debian wheezy
</span><br>
<span class="quotelev1">&gt; 7.8.0. When I
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ../ompi-master/configure --prefix=$HOME/ompi-master/build
</span><br>
<span class="quotelev2">&gt;&gt; --with-hwloc=$HOME/openmpi/hwloc/build
</span><br>
<span class="quotelev2">&gt;&gt; --with-hwloc-libdir=$HOME/openmpi/hwloc/build/lib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get the error code:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; checking whether we are cross compiling... configure: error: in
</span><br>
<span class="quotelev2">&gt;&gt; `/home/peter/openmpi/build/opal/mca/event/libevent2022/libevent':
</span><br>
<span class="quotelev2">&gt;&gt; configure: error: cannot run C compiled programs.
</span><br>
<span class="quotelev2">&gt;&gt; If you meant to cross compile, use `--host'.
</span><br>
<span class="quotelev2">&gt;&gt; See `config.log' for more details
</span><br>
<span class="quotelev2">&gt;&gt; configure: /bin/bash
</span><br>
<span class="quotelev2">&gt;&gt; '../../../../../../ompi-master/opal/mca/event/libevent2022/libevent/configure'
</span><br>
<span class="quotelev2">&gt;&gt; *failed* for opal/mca/event/libevent2022/libevent
</span><br>
<span class="quotelev2">&gt;&gt; configure: WARNING: Event library failed to configure
</span><br>
<span class="quotelev2">&gt;&gt; configure: error: Cannot continue
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have looked at a previous message in this mailing list, and I have a
</span><br>
<span class="quotelev1">&gt; working compiler, so I do not believe that that is the problem here. Any
</span><br>
<span class="quotelev1">&gt; help is appreciated.
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Peter
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/03/26491.php">http://www.open-mpi.org/community/lists/users/2015/03/26491.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Kind regards Nick
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26492/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26493.php">Siegmar Gross: "[OMPI users] error building openmpi-dev-1346-gb41d2ad"</a>
<li><strong>Previous message:</strong> <a href="26491.php">Peter Gottesman: "[OMPI users] Configuration error with external hwloc"</a>
<li><strong>In reply to:</strong> <a href="26491.php">Peter Gottesman: "[OMPI users] Configuration error with external hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26494.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Configuration error with external hwloc"</a>
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
