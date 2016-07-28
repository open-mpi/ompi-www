<?
$subject_val = "[OMPI users] Solution for an old compilation bug";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 21 04:36:03 2009" -->
<!-- isoreceived="20090821083603" -->
<!-- sent="Fri, 21 Aug 2009 10:35:58 +0200" -->
<!-- isosent="20090821083558" -->
<!-- name="Robert Sch&#246;ne" -->
<!-- email="robert.schoene_at_[hidden]" -->
<!-- subject="[OMPI users] Solution for an old compilation bug" -->
<!-- id="1250843758.5384.112.camel_at_arbila.inf.tu-dresden.de" -->
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
<strong>Subject:</strong> [OMPI users] Solution for an old compilation bug<br>
<strong>From:</strong> Robert Sch&#246;ne (<em>robert.schoene_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-21 04:35:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10451.php">Julia He: "Re: [OMPI users] MPI loop problem"</a>
<li><strong>Previous message:</strong> <a href="10449.php">Paul Romano: "[OMPI users] MPI_ACCUMULATE with derived datatype"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>(I don't know whether this should have been sent to the dev-list, but
<br>
the last time this error occured, it was posted to the users-list, so
<br>
I'm doing it too.)
<br>
<p>The last days I had problems compiling OpenMPI on a Debian and a SuSE
<br>
Linux.
<br>
The bug had been already reported in 2007.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/users/2007/06/3353.php">http://www.open-mpi.org/community/lists/users/2007/06/3353.php</a>
<br>
and results in the following output when running make:
<br>
<p>...
<br>
depbase=`echo asm.lo | sed 's|[^/]*$|.deps/&amp;|;s|\.lo$||'`;\
<br>
/bin/sh ../../libtool --tag=CC   --mode=compile gcc -DHAVE_CONFIG_H -I.
<br>
-I../../../opal/asm -I../../opal/include -I../../orte/include
<br>
-I../../ompi/include -I../../opal/mca/paffinity/linux/plpa/src/libplpa
<br>
-I../../.. -I../.. -I../../../opal/include -I../../../orte/include
<br>
-I../../../ompi/include    -O3 -DNDEBUG -finline-functions
<br>
-fno-strict-aliasing -pthread -fvisibility=hidden -MT asm.lo -MD -MP -MF
<br>
$depbase.Tpo -c -o asm.lo ../../../opal/asm/asm.c &amp;&amp;\
<br>
mv -f $depbase.Tpo $depbase.Plo
<br>
../../libtool: line 847: X--tag=CC: command not found
<br>
../../libtool: line 880: libtool: ignoring unknown tag : command not
<br>
found
<br>
../../libtool: line 847: X--mode=compile: command not found
<br>
../../libtool: line 1014: *** Warning: inferring the mode of operation
<br>
is deprecated.: command not found
<br>
../../libtool: line 1015: *** Future versions of Libtool will require
<br>
--mode=MODE be specified.: command not found
<br>
../../libtool: line 1158: Xgcc: command not found
<br>
../../libtool: line 1158: X-DHAVE_CONFIG_H: command not found
<br>
../../libtool: line 1158: X-I.: command not found
<br>
...
<br>
<p>However there had been no solution at that time.
<br>
<p>A colleague of mine (J. Doleschal) came up with the idea to use another
<br>
libtool.
<br>
<p>There are multiple libtool's after starting configure
<br>
<p>$ find ./ -name libtool
<br>
./ompi/mca/io/romio/romio/libtool
<br>
./ompi/contrib/vt/vt/extlib/otf/libtool
<br>
./opal/libltdl/libtool
<br>
./libtool
<br>
<p>The libtool created in the compiling directory has a bug, but other
<br>
libtools are working without problems even though they have the same
<br>
version.
<br>
<p>So, our first (not final) solution was:
<br>
<p>$ rm ./libtool
<br>
$ ln -s ./opal/libltdl/libtool ./libtool
<br>
<p>Even though it seems to be enough, this solution might not be optimal.
<br>
So we took a deeper look into ./libtool and found, that the problem lied
<br>
in the term &quot;$echo&quot;. If &quot;$ECHO&quot; is used instead, the make process
<br>
finishes fine.
<br>
<p>E.g. line 847
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-*=*) optarg=`$echo &quot;X$arg&quot; | $Xsed -e 's/[-_a-zA-Z0-9]*=//'` ;;
<br>
should be
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-*=*) optarg=`$ECHO &quot;X$arg&quot; | $Xsed -e 's/[-_a-zA-Z0-9]*=//'` ;;
<br>
<p><p>Another (and simpler) option would be to change line 162 from
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ECHO=...
<br>
to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo=...
<br>
as other libtool's are doing it (e.g. ./opal/libltdl/libtool)
<br>
<p><p>Bye Robert 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10451.php">Julia He: "Re: [OMPI users] MPI loop problem"</a>
<li><strong>Previous message:</strong> <a href="10449.php">Paul Romano: "[OMPI users] MPI_ACCUMULATE with derived datatype"</a>
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
