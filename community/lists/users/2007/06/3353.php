<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun  1 13:32:30 2007" -->
<!-- isoreceived="20070601173230" -->
<!-- sent="Fri, 01 Jun 2007 18:32:54 +0200" -->
<!-- isosent="20070601163254" -->
<!-- name="Daniel Pfenniger" -->
<!-- email="daniel.pfenniger_at_[hidden]" -->
<!-- subject="[OMPI users] Compilation bug in libtool" -->
<!-- id="46604A36.90205_at_obs.unige.ch" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Daniel Pfenniger (<em>daniel.pfenniger_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-01 12:32:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3354.php">Bert Wesarg: "[OMPI users] Typo in r14829?"</a>
<li><strong>Previous message:</strong> <a href="3352.php">Reese Faucette: "Re: [OMPI users] mixing MX and TCP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3356.php">Tim Prins: "Re: [OMPI users] Compilation bug in libtool"</a>
<li><strong>Reply:</strong> <a href="3356.php">Tim Prins: "Re: [OMPI users] Compilation bug in libtool"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>version 1.2.2 refuses to compile on Mandriva 2007.1:
<br>
(more details are in the attached lg files)
<br>
...
<br>
<p>make[2]: Entering directory `/usr/src/rpm/BUILD/openmpi-1.2.2/opal/asm'
<br>
depbase=`echo asm.lo | sed 's|[^/]*$|.deps/&amp;|;s|\.lo$||'`; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if /bin/sh ../../libtool --tag=CC --mode=compile gcc -DHAVE_CONFIG_H -I.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-I. -I../../opal/include -I../../orte/include
<br>
-I../../ompi/include -I../../ompi                                              /include
<br>
&nbsp;&nbsp;-I../..    -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -pthr
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ead -MT asm.lo -MD -MP -MF &quot;$depbase.Tpo&quot; -c -o asm.lo asm.c; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;then mv -f &quot;$depbase.Tpo&quot; &quot;$depbase.Plo&quot;; else rm -f &quot;$depbase.Tpo&quot;; exi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;t 1; fi
<br>
../../libtool: line 813: X--tag=CC: command not found
<br>
../../libtool: line 846: libtool: ignoring unknown tag : command not found
<br>
../../libtool: line 813: X--mode=compile: command not found
<br>
../../libtool: line 979: *** Warning: inferring the mode of operation is depreca
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ted.: command not found
<br>
../../libtool: line 980: *** Future versions of Libtool will require --mode=MODE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;be specified.: command not found
<br>
../../libtool: line 1123: Xgcc: command not found
<br>
../../libtool: line 1123: X-DHAVE_CONFIG_H: command not found
<br>
../../libtool: line 1123: X-I.: command not found
<br>
../../libtool: line 1123: X-I.: command not found
<br>
../../libtool: line 1123: X-I../../opal/include: No such file or directory
<br>
../../libtool: line 1123: X-I../../orte/include: No such file or directory
<br>
../../libtool: line 1123: X-I../../ompi/include: No such file or directory
<br>
../../libtool: line 1123: X-I../../ompi/include: No such file or directory
<br>
../../libtool: line 1123: X-I../..: No such file or directory
<br>
../../libtool: line 1123: X-O3: command not found
<br>
../../libtool: line 1123: X-DNDEBUG: command not found
<br>
../../libtool: line 1123: X-finline-functions: command not found
<br>
../../libtool: line 1123: X-fno-strict-aliasing: command not found
<br>
../../libtool: line 1123: X-pthread: command not found
<br>
../../libtool: line 1123: X-MT: command not found
<br>
../../libtool: line 1123: Xasm.lo: command not found
<br>
../../libtool: line 1123: X-MD: command not found
<br>
../../libtool: line 1123: X-MP: command not found
<br>
../../libtool: line 1123: X-MF: command not found
<br>
../../libtool: line 1123: X.deps/asm.Tpo: No such file or directory
<br>
../../libtool: line 1123: X-c: command not found
<br>
../../libtool: line 1175: Xasm.lo: command not found
<br>
../../libtool: line 1180: libtool: compile: cannot determine name of library obj
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ect from `': command not found
<br>
make[2]: *** [asm.lo] Error 1
<br>
make[2]: Leaving directory `/usr/src/rpm/BUILD/openmpi-1.2.2/opal/asm'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/usr/src/rpm/BUILD/openmpi-1.2.2/opal'
<br>
make: *** [all-recursive] Error 1
<br>
[root openmpi-1.2.2]#
<br>
<p><p><p><p><pre>
-- 
-----------------------------------------------------------------------------
Dan

</pre>
<hr>
<ul>
<li>application/x-tar-gz attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3353/compile_bug_libtool.tgz">compile_bug_libtool.tgz</a>
</ul>
<!-- attachment="compile_bug_libtool.tgz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3354.php">Bert Wesarg: "[OMPI users] Typo in r14829?"</a>
<li><strong>Previous message:</strong> <a href="3352.php">Reese Faucette: "Re: [OMPI users] mixing MX and TCP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3356.php">Tim Prins: "Re: [OMPI users] Compilation bug in libtool"</a>
<li><strong>Reply:</strong> <a href="3356.php">Tim Prins: "Re: [OMPI users] Compilation bug in libtool"</a>
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
