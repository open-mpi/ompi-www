<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jan  2 13:21:17 2007" -->
<!-- isoreceived="20070102182117" -->
<!-- sent="Tue, 2 Jan 2007 13:09:43 -0500" -->
<!-- isosent="20070102180943" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orted: command not found" -->
<!-- id="89331552-8F2A-4ED3-B21A-B6BCD33C7E90_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4045.201.242.105.201.1167754825.squirrel_at_verin.ula.ve" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-02 13:09:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2415.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "[OMPI users] Ompi failing on mx only"</a>
<li><strong>Previous message:</strong> <a href="2413.php">Brock Palen: "Re: [OMPI users] segv at runtime with ifort"</a>
<li><strong>In reply to:</strong> <a href="2412.php">jcolmenares_at_[hidden]: "[OMPI users] orted: command not found"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2416.php">jcolmenares_at_[hidden]: "Re: [OMPI users] orted: command not found"</a>
<li><strong>Reply:</strong> <a href="2416.php">jcolmenares_at_[hidden]: "Re: [OMPI users] orted: command not found"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
First you should make sure that PATH and LD_LIBRARY_PATH are defined  
<br>
in the section of your .bashrc file that get parsed for non  
<br>
interactive sessions. Run &quot;mpirun -np 1 printenv&quot; and check if PATH  
<br>
and LD_LIBRARY_PATH have the values you expect.
<br>
<p>For your second question you should give the path to your prueba.bin  
<br>
executable. I'll do something like &quot;mpirun --prefix /usr/local/ 
<br>
openmpi -np 2 ./prueba.bin&quot;. The reason is that usually &quot;.&quot; is not in  
<br>
the PATH.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jan 2, 2007, at 11:20 AM, jcolmenares_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; I installed openmpi 1.1.2 on two 686 boxes runing ubuntu 6.10.
</span><br>
<span class="quotelev1">&gt; Followed the instructions given in the FAQ. Nevertheless, I get the
</span><br>
<span class="quotelev1">&gt; following message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [bernie-1:05053] ERROR: A daemon on node 192.168.1.113 failed to  
</span><br>
<span class="quotelev1">&gt; start as
</span><br>
<span class="quotelev1">&gt; expected.
</span><br>
<span class="quotelev1">&gt; [bernie-1:05053] ERROR: There may be more information available from
</span><br>
<span class="quotelev1">&gt; [bernie-1:05053] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev1">&gt; [bernie-1:05053] ERROR: The daemon exited unexpectedly with status  
</span><br>
<span class="quotelev1">&gt; 127.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; now, I've been browsing the web, including the mailing lists, and it
</span><br>
<span class="quotelev1">&gt; appears that the error should be that I have not declared the  
</span><br>
<span class="quotelev1">&gt; variables
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export PATH=&quot;/usr/local/openmpi/bin:${PATH}&quot;
</span><br>
<span class="quotelev1">&gt; export LD_LIBRARY_PATH=&quot;/usr/local/openmpi/lib:${LD_LIBRARY_PATH}&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; at the node, wich I have. I have even created all the posible folders
</span><br>
<span class="quotelev1">&gt; proposed at the FAQ for remote loggins, although I'm using bash.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I do a ssh user_at_remote_node, I can connect without being asked  
</span><br>
<span class="quotelev1">&gt; for a
</span><br>
<span class="quotelev1">&gt; password, and if I type mpif90, I get: &quot;gfortran: no input files&quot;,  
</span><br>
<span class="quotelev1">&gt; wich
</span><br>
<span class="quotelev1">&gt; should mean that indeed the PATH and LD_LIBRARY_PATH are being  
</span><br>
<span class="quotelev1">&gt; updated on
</span><br>
<span class="quotelev1">&gt; the remote logging.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But, if I do:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; bash$  mpirun --prefix /usr/local/openmpi -np 2 prueba.bin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the result is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; Failed to find the following executable:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Host:       bernie-3
</span><br>
<span class="quotelev1">&gt; Executable: prueba.bin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cannot continue.
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 0 with PID 0 on node &quot;192.168.1.113&quot;  
</span><br>
<span class="quotelev1">&gt; exited
</span><br>
<span class="quotelev1">&gt; on signal 4.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've been looking around, but have not been able to find what does the
</span><br>
<span class="quotelev1">&gt; signal 4 means.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just in case, I was running an example program wich runs fine at my
</span><br>
<span class="quotelev1">&gt; university cluster. Nevertheless, decided to run an even simpler  
</span><br>
<span class="quotelev1">&gt; one, wich
</span><br>
<span class="quotelev1">&gt; I include, for it may be that the error is there (I definitly hope
</span><br>
<span class="quotelev1">&gt; not!...)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; program test
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   use mpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   implicit none
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   integer :: myid,sizze,ierr
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   call MPI_INIT(ierr)
</span><br>
<span class="quotelev1">&gt;   call MPI_COMM_SIZE(MPI_COMM_WORLD,sizze,ierr)
</span><br>
<span class="quotelev1">&gt;   call MPI_COMM_RANK(MPI_COMM_WORLD,myid,ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   print *,&quot;I'm using &quot;,sizze,&quot; processors&quot;
</span><br>
<span class="quotelev1">&gt;   print *,&quot;of wich I'm the number &quot;,myid
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   call MPI_FINALIZE(ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; end program test
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is the first time I have installed -and use- any parallel  
</span><br>
<span class="quotelev1">&gt; programing
</span><br>
<span class="quotelev1">&gt; program or library, and I'm doing it as a personal proyect for a  
</span><br>
<span class="quotelev1">&gt; graduate
</span><br>
<span class="quotelev1">&gt; curse, so any help will be greatly appreciated!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jose Colmenares
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2415.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "[OMPI users] Ompi failing on mx only"</a>
<li><strong>Previous message:</strong> <a href="2413.php">Brock Palen: "Re: [OMPI users] segv at runtime with ifort"</a>
<li><strong>In reply to:</strong> <a href="2412.php">jcolmenares_at_[hidden]: "[OMPI users] orted: command not found"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2416.php">jcolmenares_at_[hidden]: "Re: [OMPI users] orted: command not found"</a>
<li><strong>Reply:</strong> <a href="2416.php">jcolmenares_at_[hidden]: "Re: [OMPI users] orted: command not found"</a>
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
