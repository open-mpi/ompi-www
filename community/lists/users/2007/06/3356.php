<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Jun  2 08:16:55 2007" -->
<!-- isoreceived="20070602121655" -->
<!-- sent="Sat, 2 Jun 2007 08:16:49 -0400" -->
<!-- isosent="20070602121649" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compilation bug in libtool" -->
<!-- id="200706020816.50100.tprins_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="46604A36.90205_at_obs.unige.ch" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-02 08:16:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3357.php">Jayanta Roy: "[OMPI users] openmpi-1.2.2 installation"</a>
<li><strong>Previous message:</strong> <a href="3355.php">Brian Barrett: "Re: [OMPI users] Typo in r14829?"</a>
<li><strong>In reply to:</strong> <a href="3353.php">Daniel Pfenniger: "[OMPI users] Compilation bug in libtool"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Daniel,
<br>
<p>I am able to replicate your problem on Mandriva 2007.1, however I'm not sure 
<br>
what is going on. 
<br>
<p>I was able to build the tarball just fine though, so you may try that.
<br>
<p>Tim
<br>
<p>On Friday 01 June 2007 12:32:54 pm Daniel Pfenniger wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; version 1.2.2 refuses to compile on Mandriva 2007.1:
</span><br>
<span class="quotelev1">&gt; (more details are in the attached lg files)
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/usr/src/rpm/BUILD/openmpi-1.2.2/opal/asm'
</span><br>
<span class="quotelev1">&gt; depbase=`echo asm.lo | sed 's|[^/]*$|.deps/&amp;|;s|\.lo$||'`; \
</span><br>
<span class="quotelev1">&gt;         if /bin/sh ../../libtool --tag=CC --mode=compile gcc
</span><br>
<span class="quotelev1">&gt; -DHAVE_CONFIG_H -I. -I. -I../../opal/include -I../../orte/include
</span><br>
<span class="quotelev1">&gt; -I../../ompi/include -I../../ompi                                          
</span><br>
<span class="quotelev1">&gt;    /include -I../..    -O3 -DNDEBUG -finline-functions -fno-strict-aliasing
</span><br>
<span class="quotelev1">&gt; -pthr ead -MT asm.lo -MD -MP -MF &quot;$depbase.Tpo&quot; -c -o asm.lo asm.c; \ then
</span><br>
<span class="quotelev1">&gt; mv -f &quot;$depbase.Tpo&quot; &quot;$depbase.Plo&quot;; else rm -f &quot;$depbase.Tpo&quot;; exi t 1; fi
</span><br>
<span class="quotelev1">&gt; ../../libtool: line 813: X--tag=CC: command not found
</span><br>
<span class="quotelev1">&gt; ../../libtool: line 846: libtool: ignoring unknown tag : command not found
</span><br>
<span class="quotelev1">&gt; ../../libtool: line 813: X--mode=compile: command not found
</span><br>
<span class="quotelev1">&gt; ../../libtool: line 979: *** Warning: inferring the mode of operation is
</span><br>
<span class="quotelev1">&gt; depreca ted.: command not found
</span><br>
<span class="quotelev1">&gt; ../../libtool: line 980: *** Future versions of Libtool will require
</span><br>
<span class="quotelev1">&gt; --mode=MODE be specified.: command not found ../../libtool: line 1123:
</span><br>
<span class="quotelev1">&gt; Xgcc: command not found
</span><br>
<span class="quotelev1">&gt; ../../libtool: line 1123: X-DHAVE_CONFIG_H: command not found
</span><br>
<span class="quotelev1">&gt; ../../libtool: line 1123: X-I.: command not found
</span><br>
<span class="quotelev1">&gt; ../../libtool: line 1123: X-I.: command not found
</span><br>
<span class="quotelev1">&gt; ../../libtool: line 1123: X-I../../opal/include: No such file or directory
</span><br>
<span class="quotelev1">&gt; ../../libtool: line 1123: X-I../../orte/include: No such file or directory
</span><br>
<span class="quotelev1">&gt; ../../libtool: line 1123: X-I../../ompi/include: No such file or directory
</span><br>
<span class="quotelev1">&gt; ../../libtool: line 1123: X-I../../ompi/include: No such file or directory
</span><br>
<span class="quotelev1">&gt; ../../libtool: line 1123: X-I../..: No such file or directory
</span><br>
<span class="quotelev1">&gt; ../../libtool: line 1123: X-O3: command not found
</span><br>
<span class="quotelev1">&gt; ../../libtool: line 1123: X-DNDEBUG: command not found
</span><br>
<span class="quotelev1">&gt; ../../libtool: line 1123: X-finline-functions: command not found
</span><br>
<span class="quotelev1">&gt; ../../libtool: line 1123: X-fno-strict-aliasing: command not found
</span><br>
<span class="quotelev1">&gt; ../../libtool: line 1123: X-pthread: command not found
</span><br>
<span class="quotelev1">&gt; ../../libtool: line 1123: X-MT: command not found
</span><br>
<span class="quotelev1">&gt; ../../libtool: line 1123: Xasm.lo: command not found
</span><br>
<span class="quotelev1">&gt; ../../libtool: line 1123: X-MD: command not found
</span><br>
<span class="quotelev1">&gt; ../../libtool: line 1123: X-MP: command not found
</span><br>
<span class="quotelev1">&gt; ../../libtool: line 1123: X-MF: command not found
</span><br>
<span class="quotelev1">&gt; ../../libtool: line 1123: X.deps/asm.Tpo: No such file or directory
</span><br>
<span class="quotelev1">&gt; ../../libtool: line 1123: X-c: command not found
</span><br>
<span class="quotelev1">&gt; ../../libtool: line 1175: Xasm.lo: command not found
</span><br>
<span class="quotelev1">&gt; ../../libtool: line 1180: libtool: compile: cannot determine name of
</span><br>
<span class="quotelev1">&gt; library obj ect from `': command not found make[2]: *** [asm.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/usr/src/rpm/BUILD/openmpi-1.2.2/opal/asm'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/usr/src/rpm/BUILD/openmpi-1.2.2/opal'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; [root openmpi-1.2.2]#
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3357.php">Jayanta Roy: "[OMPI users] openmpi-1.2.2 installation"</a>
<li><strong>Previous message:</strong> <a href="3355.php">Brian Barrett: "Re: [OMPI users] Typo in r14829?"</a>
<li><strong>In reply to:</strong> <a href="3353.php">Daniel Pfenniger: "[OMPI users] Compilation bug in libtool"</a>
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
