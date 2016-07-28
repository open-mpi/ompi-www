<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Dec 27 10:29:23 2006" -->
<!-- isoreceived="20061227152923" -->
<!-- sent="Wed, 27 Dec 2006 15:29:09 +0000" -->
<!-- isosent="20061227152909" -->
<!-- name="Michael Marti" -->
<!-- email="m.marti_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi / mpirun problem on aix: poll failed with errno=25, opal_event_loop: ompi_evesel-&amp;gt;dispatch() failed." -->
<!-- id="E76804D5-562A-4D07-9F8F-FB4CD6680E75_at_cfp.ist.utl.pt" -->
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
<strong>From:</strong> Michael Marti (<em>m.marti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-27 10:29:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2407.php">Benjamin: "[OMPI users] Compile problem - _S_empty_rep_storage"</a>
<li><strong>Previous message:</strong> <a href="2405.php">Allen Barnett: "Re: [OMPI users] Relocating an Installation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/01/2411.php">Jeff Squyres: "Re: [OMPI users] openmpi / mpirun problem on aix: poll failed with errno=25, opal_event_loop: ompi_evesel-&gt;dispatch() failed."</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/01/2411.php">Jeff Squyres: "Re: [OMPI users] openmpi / mpirun problem on aix: poll failed with errno=25, opal_event_loop: ompi_evesel-&gt;dispatch() failed."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear All
<br>
<p>I am trying to get openmpi-1.1.2 to work on AIX 5.3 / power5.
<br>
<p>:: Compilation seems to have worked with the following sequence:
<br>
====================================================================
<br>
setenv OBJECT_MODE 64
<br>
<p>setenv CC xlc
<br>
setenv CXX xlC
<br>
setenv F77 xlf
<br>
setenv FC xlf90
<br>
<p>setenv CFLAGS &quot;-qthreaded -O3 -qmaxmem=-1 -qarch=pwr5x -qtune=pwr5 -q64&quot;
<br>
setenv CXXFLAGS &quot;-qthreaded -O3 -qmaxmem=-1 -qarch=pwr5x -qtune=pwr5 - 
<br>
q64&quot;
<br>
setenv FFLAGS &quot;-qthreaded -O3 -qmaxmem=-1 -qarch=pwr5x -qtune=pwr5 -q64&quot;
<br>
setenv FCFLAGS &quot;-qthreaded -O3 -qmaxmem=-1 -qarch=pwr5x -qtune=pwr5 - 
<br>
q64&quot;
<br>
setenv LDFLAGS &quot;-Wl,-brtl&quot;
<br>
<p>./configure --prefix=/ist/openmpi-1.1.2 \
<br>
&nbsp;&nbsp;&nbsp;--disable-mpi-cxx \
<br>
&nbsp;&nbsp;&nbsp;--disable-mpi-cxx-seek \
<br>
&nbsp;&nbsp;&nbsp;--enable-mpi-threads \
<br>
&nbsp;&nbsp;&nbsp;--enable-progress-threads \
<br>
&nbsp;&nbsp;&nbsp;--enable-static \
<br>
&nbsp;&nbsp;&nbsp;--disable-shared \
<br>
&nbsp;&nbsp;&nbsp;--disable-io-romio
<br>
====================================================================
<br>
<p>:: After the compilation I ran make check and all 11 tests passed  
<br>
successfully.
<br>
<p>:: Now I'm trying to run the following command just for test:
<br>
# mpirun -hostfile /gpfs/MICHAEL/MPI_hostfiles/mpinodes_b41-b44_1.asc  
<br>
-np 2 /usr/bin/hostname
<br>
- The file /gpfs/MICHAEL/MPI_hostfiles/mpinodes_b41-b44_1.asc  
<br>
contains 4 hosts:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;r1blade041 slots=1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;r1blade042 slots=1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;r1blade043 slots=1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;r1blade044 slots=1
<br>
- The mpirun command eventually hangs with the following message:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[r1blade041:418014] poll failed with errno=25
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[r1blade041:418014] opal_event_loop: ompi_evesel-&gt;dispatch()  
<br>
failed.
<br>
- In this state mpirun cannot be killed by hitting &lt;ctrl-c&gt; only a  
<br>
kill -9 will do the trick.
<br>
- While the mpirun still hangs I can see that the &quot;orted&quot; has been  
<br>
launched on both requested hosts.
<br>
<p>:: I turned on all debug options in openmpi-mca-params.conf. The  
<br>
output for the same call of mpirun is in the file mpirun-debug.txt.gz.
<br>
&#239;&#191;&#188;
<br>
:: As sugested in the mailinglis rules I include config.log  
<br>
(config.log.gz) and the output of ompi_info (ompi_info.txt.gz).&#239;&#191;&#188; &#239;&#191;&#188;
<br>
<p>:: As I am completely new to openmpi (I have some experience with  
<br>
lam) I am lost at this stage. I would really appreciate if someone  
<br>
could give me some hints as to what is going wrong and where I could  
<br>
get more info.
<br>
<p>Best regards,
<br>
<p>Michael Marti.
<br>
<p><p><pre>
-- 
------------------------------------------------------------------------ 
----
Michael Marti
Centro de Fisica dos Plasmas
Instituto Superior Tecnico
Av. Rovisco Pais
1049-001 Lisboa
Portugal
Tel:       +351 218 419 379
Fax:      +351 218 464 455
Mobile:  +351 968 434 327
------------------------------------------------------------------------ 
----
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2406/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2406/mpirun-debug.txt.gz">mpirun-debug.txt.gz</a>
</ul>
<!-- attachment="mpirun-debug.txt.gz" -->
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2406/03-attachment">attachment</a>
</ul>
<!-- attachment="03-attachment" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2406/config.log.gz">config.log.gz</a>
</ul>
<!-- attachment="config.log.gz" -->
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2406/05-attachment">attachment</a>
</ul>
<!-- attachment="05-attachment" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2406/ompi_info.txt.gz">ompi_info.txt.gz</a>
</ul>
<!-- attachment="ompi_info.txt.gz" -->
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2406/07-attachment">attachment</a>
</ul>
<!-- attachment="07-attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2407.php">Benjamin: "[OMPI users] Compile problem - _S_empty_rep_storage"</a>
<li><strong>Previous message:</strong> <a href="2405.php">Allen Barnett: "Re: [OMPI users] Relocating an Installation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/01/2411.php">Jeff Squyres: "Re: [OMPI users] openmpi / mpirun problem on aix: poll failed with errno=25, opal_event_loop: ompi_evesel-&gt;dispatch() failed."</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/01/2411.php">Jeff Squyres: "Re: [OMPI users] openmpi / mpirun problem on aix: poll failed with errno=25, opal_event_loop: ompi_evesel-&gt;dispatch() failed."</a>
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
