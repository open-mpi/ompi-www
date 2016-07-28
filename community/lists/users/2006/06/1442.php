<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun 16 23:44:40 2006" -->
<!-- isoreceived="20060617034440" -->
<!-- sent="Fri, 16 Jun 2006 23:44:29 -0400" -->
<!-- isosent="20060617034429" -->
<!-- name="Eric Thibodeau" -->
<!-- email="kyron_at_[hidden]" -->
<!-- subject="Re: [OMPI users] pls:rsh: execv failed with errno=2" -->
<!-- id="200606162344.29350.kyron_at_neuralbs.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="C835B9C9CB0F1C4E9DA48913C9E8F8AFA43611_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>From:</strong> Eric Thibodeau (<em>kyron_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-16 23:44:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1443.php">Tony Ladd: "[OMPI users] mca_btl_tcp_frag_send: writev failed with errno=110"</a>
<li><strong>Previous message:</strong> <a href="1441.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OpenMPI, debugging, and Portland Group's pgdbg"</a>
<li><strong>In reply to:</strong> <a href="1440.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] pls:rsh: execv failed with errno=2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Jeff,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fristly, don't worry about jumping in late, I'll send you a skid rope ;) Secondly, thanks for your nice little artilces on clustermonkey.net (good refresher on MPI). And finally, down to my issues, thanks for clearing out the --prefix LD_LIBRARY_PATH and all. The ebuild I made/mangled for Openmpi under Gentoo was modified by some of the devs to follow some of the lib Vs lib64 reqs. I might change them to be identicall (only $PREFIX/lib) across platforms since multi-arch MPI will be hell to get working with a changing LD_LIBRARY_PATH.
<br>
<p>After some recommendations, I tried openmpi-1.1b3r10389 on the AMD64 arch and got my MPI app running on that single sual Opteron node, I still have to figure out the --prefix/PATH/LD_LIBRARY_PATH mess to get the app to spawn across that dual Opteron node and 2 single Athlon nodes (cross arch with the variying LD_LIBRARY_PATH). But that's another issue for the moment (a bit of fiddling on my side to get orte to be recognized on the nodes)
<br>
<p>As for the sparc-sun-solaris2.8 , I tried compiling openmpi-1.1b3r10389 but it bombs with both gcc or the SUN cc:
<br>
<p>Making all in asm
<br>
source='asm.c' object='asm.lo' libtool=yes \
<br>
DEPDIR=.deps depmode=none /bin/bash ../.././config/depcomp \
<br>
/bin/bash ../../libtool --tag=CC --mode=compile /export/lca/appl/Forte/SUNWspro/WS6U2/bin/cc -DHAVE_CONFIG_H  -I. -I. -I../../opal/include -I../../orte/include -I../../ompi/include -I../../ompi/include   -I../..   -O -DNDEBUG  -mt -c -o asm.lo asm.c
<br>
&nbsp;/export/lca/appl/Forte/SUNWspro/WS6U2/bin/cc -DHAVE_CONFIG_H -I. -I. -I../../opal/include -I../../orte/include -I../../ompi/include -I../../ompi/include -I../.. -O -DNDEBUG -mt -c asm.c  -KPIC -DPIC -o .libs/asm.o
<br>
&quot;../../opal/include/opal/sys/atomic.h&quot;, line 486: #error: Atomic arithmetic on pointers not supported
<br>
cc: acomp failed for asm.c
<br>
*** Error code 1
<br>
<p>I was told by one of the system's admin that the SUN Enterprise machine (12 proc) has &quot;special&quot; considerations when using semaphores (it's hardware implemented O_o! ), I'm only mentionning this due to the error message (Atomic arithmetic ...)
<br>
<p>So, I got half my problem resolved with the upgrade, any suggestions for compiling OpenMPI on this _old_ but very educationnal SMP machine?
<br>
<p>Eric
<br>
<p>Le vendredi 16 juin 2006 17:32, Jeff Squyres (jsquyres) a &#233;crit&#160;:
<br>
<span class="quotelev1">&gt; Sorry for jumping in late...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The /lib vs. /lib64 thing as part of --prefix was definitely broken until recently.  This behavior has been fixed in the 1.1 series.  Specifically, OMPI will take the prefix that you provided and append the basename of the local $libdir.  So if you configured OMPI with something like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  shell$ ./configure --libdir=/some/path/lib64 ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And then you run:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  shell$ mpirun --prefix /some/path ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then OMPI will add /some/path/lib64 to the remote LD_LIBRARY_PATH.  The previous behavior would always add &quot;/lib&quot; to the remote LD_LIBRARY_PATH, regardless of what the local $libdir was (i.e., it ignored the basename of your $libdir).  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you have a situation more complicated than this (e.g., your $libdir is different than your prefix by more than just the basename), then --prefix is not the solution for you.  Instead, you'll need to set your $PATH and $LD_LIBRARY_PATH properly on all nodes (e.g., in your shell startup files). Specifically, --prefix is meant to be an easy workaround for common configurations where $libdir is a subdirectory under $prefix.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Another random note: invoking mpirun with an absolute path (e.g., /path/to/bin/mpirun) is exactly the same as specifying --prefix /path/to -- so you don't have to do both.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
[..SNIP..]
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1442/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1443.php">Tony Ladd: "[OMPI users] mca_btl_tcp_frag_send: writev failed with errno=110"</a>
<li><strong>Previous message:</strong> <a href="1441.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OpenMPI, debugging, and Portland Group's pgdbg"</a>
<li><strong>In reply to:</strong> <a href="1440.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] pls:rsh: execv failed with errno=2"</a>
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
