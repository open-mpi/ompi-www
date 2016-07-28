<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov 17 11:21:36 2005" -->
<!-- isoreceived="20051117162136" -->
<!-- sent="Thu, 17 Nov 2005 10:21:25 -0600" -->
<!-- isosent="20051117162125" -->
<!-- name="David Huebner" -->
<!-- email="dthuebner_at_[hidden]" -->
<!-- subject="[O-MPI users] FC4 Compile Problem" -->
<!-- id="E21C0C99-61EC-46F5-A0A7-1E440D84715B_at_ole.augie.edu" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> David Huebner (<em>dthuebner_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-17 11:21:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0359.php">Daryl W. Grunau: "Re: [O-MPI users] users Digest, Vol 138, Issue 2"</a>
<li><strong>Previous message:</strong> <a href="0357.php">Daryl W. Grunau: "Re: [O-MPI users] OMPI 1.0 rc6 --with-bproc errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0363.php">Brian Barrett: "Re: [O-MPI users] FC4 Compile Problem"</a>
<li><strong>Reply:</strong> <a href="0363.php">Brian Barrett: "Re: [O-MPI users] FC4 Compile Problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm managing a small cluster running Clustermatic 5 on top of Fedora  
<br>
Core 4.  OMPI won't build, exiting with the following error.
<br>
<p>gcc -O3 -DNDEBUG -fno-strict-aliasing -pthread -o .libs/orted orted.o  
<br>
-Wl,--export-dynamic  ../../../orte/.libs/liborte.so -lbproc /home/ 
<br>
dthuebner/Desktop/openmpi/openmpi-1.0rc8/opal/.libs/ 
<br>
libopal.so ../../../opal/.libs/libopal.so -ldl -lm -lutil -lnsl -Wl,-- 
<br>
rpath -Wl,/usr/openmpi/lib
<br>
../../../orte/.libs/liborte.so: undefined reference to  
<br>
`pthread_kill_other_threads_np'
<br>
collect2: ld returned 1 exit status
<br>
make[3]: *** [orted] Error 1
<br>
make[3]: Leaving directory `/home/dthuebner/Desktop/openmpi/ 
<br>
openmpi-1.0rc8/orte/tools/orted'
<br>
make[2]: *** [all-recursive] Error 1
<br>
make[2]: Leaving directory `/home/dthuebner/Desktop/openmpi/ 
<br>
openmpi-1.0rc8/orte/tools'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/home/dthuebner/Desktop/openmpi/ 
<br>
openmpi-1.0rc8/orte'
<br>
make: *** [all-recursive] Error 1
<br>
<p>Thanks,
<br>
David
<br>
<p><p><p><p>
<br><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0358/ompi-output.tar.gz">ompi-output.tar.gz</a>
</ul>
<!-- attachment="ompi-output.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0359.php">Daryl W. Grunau: "Re: [O-MPI users] users Digest, Vol 138, Issue 2"</a>
<li><strong>Previous message:</strong> <a href="0357.php">Daryl W. Grunau: "Re: [O-MPI users] OMPI 1.0 rc6 --with-bproc errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0363.php">Brian Barrett: "Re: [O-MPI users] FC4 Compile Problem"</a>
<li><strong>Reply:</strong> <a href="0363.php">Brian Barrett: "Re: [O-MPI users] FC4 Compile Problem"</a>
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
