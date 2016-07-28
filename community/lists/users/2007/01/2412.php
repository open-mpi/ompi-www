<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jan  2 11:20:36 2007" -->
<!-- isoreceived="20070102162036" -->
<!-- sent="Tue, 2 Jan 2007 12:20:25 -0400 (VET)" -->
<!-- isosent="20070102162025" -->
<!-- name="jcolmenares_at_[hidden]" -->
<!-- email="jcolmenares_at_[hidden]" -->
<!-- subject="[OMPI users] orted: command not found" -->
<!-- id="4045.201.242.105.201.1167754825.squirrel_at_verin.ula.ve" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> <a href="mailto:jcolmenares_at_[hidden]?Subject=Re:%20[OMPI%20users]%20orted:%20command%20not%20found"><em>jcolmenares_at_[hidden]</em></a><br>
<strong>Date:</strong> 2007-01-02 11:20:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2413.php">Brock Palen: "Re: [OMPI users] segv at runtime with ifort"</a>
<li><strong>Previous message:</strong> <a href="2411.php">Jeff Squyres: "Re: [OMPI users] openmpi / mpirun problem on aix: poll failed with errno=25, opal_event_loop: ompi_evesel-&gt;dispatch() failed."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2414.php">George Bosilca: "Re: [OMPI users] orted: command not found"</a>
<li><strong>Reply:</strong> <a href="2414.php">George Bosilca: "Re: [OMPI users] orted: command not found"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I installed openmpi 1.1.2 on two 686 boxes runing ubuntu 6.10.
<br>
Followed the instructions given in the FAQ. Nevertheless, I get the
<br>
following message:
<br>
<p>[bernie-1:05053] ERROR: A daemon on node 192.168.1.113 failed to start as
<br>
expected.
<br>
[bernie-1:05053] ERROR: There may be more information available from
<br>
[bernie-1:05053] ERROR: the remote shell (see above).
<br>
[bernie-1:05053] ERROR: The daemon exited unexpectedly with status 127.
<br>
<p>now, I've been browsing the web, including the mailing lists, and it
<br>
appears that the error should be that I have not declared the variables
<br>
<p>export PATH=&quot;/usr/local/openmpi/bin:${PATH}&quot;
<br>
export LD_LIBRARY_PATH=&quot;/usr/local/openmpi/lib:${LD_LIBRARY_PATH}&quot;
<br>
<p>at the node, wich I have. I have even created all the posible folders
<br>
proposed at the FAQ for remote loggins, although I'm using bash.
<br>
<p>If I do a ssh user_at_remote_node, I can connect without being asked for a
<br>
password, and if I type mpif90, I get: &quot;gfortran: no input files&quot;, wich
<br>
should mean that indeed the PATH and LD_LIBRARY_PATH are being updated on
<br>
the remote logging.
<br>
<p>But, if I do:
<br>
<p>bash$  mpirun --prefix /usr/local/openmpi -np 2 prueba.bin
<br>
<p>the result is:
<br>
<p>--------------------------------------------------------------------------
<br>
Failed to find the following executable:
<br>
<p>Host:       bernie-3
<br>
Executable: prueba.bin
<br>
<p>Cannot continue.
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that job rank 0 with PID 0 on node &quot;192.168.1.113&quot; exited
<br>
on signal 4.
<br>
<p>I've been looking around, but have not been able to find what does the
<br>
signal 4 means.
<br>
<p>Just in case, I was running an example program wich runs fine at my
<br>
university cluster. Nevertheless, decided to run an even simpler one, wich
<br>
I include, for it may be that the error is there (I definitly hope
<br>
not!...)
<br>
<p>program test
<br>
<p>&nbsp;&nbsp;use mpi
<br>
<p>&nbsp;&nbsp;implicit none
<br>
<p>&nbsp;&nbsp;integer :: myid,sizze,ierr
<br>
<p>&nbsp;&nbsp;call MPI_INIT(ierr)
<br>
&nbsp;&nbsp;call MPI_COMM_SIZE(MPI_COMM_WORLD,sizze,ierr)
<br>
&nbsp;&nbsp;call MPI_COMM_RANK(MPI_COMM_WORLD,myid,ierr)
<br>
<p>&nbsp;&nbsp;print *,&quot;I'm using &quot;,sizze,&quot; processors&quot;
<br>
&nbsp;&nbsp;print *,&quot;of wich I'm the number &quot;,myid
<br>
<p>&nbsp;&nbsp;call MPI_FINALIZE(ierr)
<br>
<p>end program test
<br>
<p><p>This is the first time I have installed -and use- any parallel programing
<br>
program or library, and I'm doing it as a personal proyect for a graduate
<br>
curse, so any help will be greatly appreciated!
<br>
<p>Best regards
<br>
<p>Jose Colmenares
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2413.php">Brock Palen: "Re: [OMPI users] segv at runtime with ifort"</a>
<li><strong>Previous message:</strong> <a href="2411.php">Jeff Squyres: "Re: [OMPI users] openmpi / mpirun problem on aix: poll failed with errno=25, opal_event_loop: ompi_evesel-&gt;dispatch() failed."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2414.php">George Bosilca: "Re: [OMPI users] orted: command not found"</a>
<li><strong>Reply:</strong> <a href="2414.php">George Bosilca: "Re: [OMPI users] orted: command not found"</a>
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
