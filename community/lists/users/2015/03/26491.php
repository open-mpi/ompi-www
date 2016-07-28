<?
$subject_val = "[OMPI users] Configuration error with external hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 17 21:30:54 2015" -->
<!-- isoreceived="20150318013054" -->
<!-- sent="Tue, 17 Mar 2015 21:30:54 -0400" -->
<!-- isosent="20150318013054" -->
<!-- name="Peter Gottesman" -->
<!-- email="mygames1030_at_[hidden]" -->
<!-- subject="[OMPI users] Configuration error with external hwloc" -->
<!-- id="CAF_-zRv+nK_Riob3dna5Azmgg=DXDOc6gpTK4gv9fv6poEPNwA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Configuration error with external hwloc<br>
<strong>From:</strong> Peter Gottesman (<em>mygames1030_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-17 21:30:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26492.php">Nick Papior Andersen: "Re: [OMPI users] Configuration error with external hwloc"</a>
<li><strong>Previous message:</strong> <a href="26490.php">Nathan Hjelm: "Re: [OMPI users] Questions regarding xpmem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26492.php">Nick Papior Andersen: "Re: [OMPI users] Configuration error with external hwloc"</a>
<li><strong>Reply:</strong> <a href="26492.php">Nick Papior Andersen: "Re: [OMPI users] Configuration error with external hwloc"</a>
<li><strong>Reply:</strong> <a href="26494.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Configuration error with external hwloc"</a>
<li><strong>Reply:</strong> <a href="26495.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Configuration error with external hwloc"</a>
<li><strong>Reply:</strong> <a href="26498.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Configuration error with external hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey all,
<br>
I am trying to compile Open MPI on a 32bit laptop running debian wheezy
<br>
7.8.0. When I
<br>
<p><span class="quotelev1">&gt; ../ompi-master/configure --prefix=$HOME/ompi-master/build
</span><br>
<span class="quotelev1">&gt; --with-hwloc=$HOME/openmpi/hwloc/build
</span><br>
<span class="quotelev1">&gt; --with-hwloc-libdir=$HOME/openmpi/hwloc/build/lib
</span><br>
<p>I get the error code:
<br>
<p><span class="quotelev1">&gt; checking whether we are cross compiling... configure: error: in
</span><br>
<span class="quotelev1">&gt; `/home/peter/openmpi/build/opal/mca/event/libevent2022/libevent':
</span><br>
<span class="quotelev1">&gt; configure: error: cannot run C compiled programs.
</span><br>
<span class="quotelev1">&gt; If you meant to cross compile, use `--host'.
</span><br>
<span class="quotelev1">&gt; See `config.log' for more details
</span><br>
<span class="quotelev1">&gt; configure: /bin/bash
</span><br>
<span class="quotelev1">&gt; '../../../../../../ompi-master/opal/mca/event/libevent2022/libevent/configure'
</span><br>
<span class="quotelev1">&gt; *failed* for opal/mca/event/libevent2022/libevent
</span><br>
<span class="quotelev1">&gt; configure: WARNING: Event library failed to configure
</span><br>
<span class="quotelev1">&gt; configure: error: Cannot continue
</span><br>
<p>I have looked at a previous message in this mailing list, and I have a
<br>
working compiler, so I do not believe that that is the problem here. Any
<br>
help is appreciated.
<br>
Thanks,
<br>
Peter
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26491/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26492.php">Nick Papior Andersen: "Re: [OMPI users] Configuration error with external hwloc"</a>
<li><strong>Previous message:</strong> <a href="26490.php">Nathan Hjelm: "Re: [OMPI users] Questions regarding xpmem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26492.php">Nick Papior Andersen: "Re: [OMPI users] Configuration error with external hwloc"</a>
<li><strong>Reply:</strong> <a href="26492.php">Nick Papior Andersen: "Re: [OMPI users] Configuration error with external hwloc"</a>
<li><strong>Reply:</strong> <a href="26494.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Configuration error with external hwloc"</a>
<li><strong>Reply:</strong> <a href="26495.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Configuration error with external hwloc"</a>
<li><strong>Reply:</strong> <a href="26498.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Configuration error with external hwloc"</a>
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
