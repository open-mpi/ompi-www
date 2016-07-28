<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Feb 10 11:26:39 2006" -->
<!-- isoreceived="20060210162639" -->
<!-- sent="Fri, 10 Feb 2006 11:27:55 -0500" -->
<!-- isosent="20060210162755" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [O-MPI users] problem running Migrate with open-MPI" -->
<!-- id="FE404939-6886-4201-B6B0-65C90B4A2BDB_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="43ECB1C0.8050000_at_ugent.be" -->
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
<strong>Date:</strong> 2006-02-10 11:27:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0636.php">James Conway: "[OMPI users] Cannonical ring program and Mac OSX 10.4.4"</a>
<li><strong>Previous message:</strong> <a href="0634.php">Andy Vierstraete: "Re: [OMPI users] [O-MPI users] problem running Migrate with open-MPI"</a>
<li><strong>In reply to:</strong> <a href="0633.php">Andy Vierstraete: "Re: [OMPI users] [O-MPI users] problem running Migrate with open-MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0648.php">Andy Vierstraete: "Re: [OMPI users] problem running Migrate with open-MPI"</a>
<li><strong>Reply:</strong> <a href="0648.php">Andy Vierstraete: "Re: [OMPI users] problem running Migrate with open-MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There are 2 things that have to be done in order to be able to run a  
<br>
Open MPI application. First the runtime environment need access to  
<br>
some of the files in the bin directory so you have to add the Open  
<br>
MPI bin directory to your path. And second, as we use shared  
<br>
libraries the OS need to know where they can be found. This is done  
<br>
using the LD_LIBRARY_PATH environment variable. So suppose that one  
<br>
has compiled Open MPI like this:
<br>
./configure --prefix=/home/one/opt
<br>
He has to add in his tcsh startup script (.tcshrc):
<br>
setenv PATH &quot;/home/one/opt/bin:${PATH}&quot;
<br>
setenv LD_LIBRARY_PATH &quot;/home/one/lib:${LD_LIBRARY_PATH}&quot;
<br>
<p>That should fix your problem. Enjoy.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Feb 10, 2006, at 10:31 AM, Andy Vierstraete wrote:
<br>
<p><span class="quotelev1">&gt; Hi Brian and Peter,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried the nightly build like Brian said, and I was able to  
</span><br>
<span class="quotelev1">&gt; compile Migrate without errors-message (that was not the case  
</span><br>
<span class="quotelev1">&gt; before, like Peter suggested, I had to set openmpi in my path).    
</span><br>
<span class="quotelev1">&gt; But is is still not running : now it can't find &quot;libmpi.so.0&quot;, and  
</span><br>
<span class="quotelev1">&gt; the directory where the file is, is in my path.
</span><br>
<span class="quotelev1">&gt; If I install openmpi 1.0.1 again, I get the same errormessages as  
</span><br>
<span class="quotelev1">&gt; last time
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll try it again with lam-mpi, and see if that works for compiling  
</span><br>
<span class="quotelev1">&gt; Migrate correctly and if it runs on this pc...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; avierstr_at_muscorum:~&gt; migrate-mpi
</span><br>
<span class="quotelev1">&gt; migrate-mpi: error while loading shared libraries: libmpi.so.0:  
</span><br>
<span class="quotelev1">&gt; cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; avierstr_at_muscorum:~&gt; migrate-n
</span><br>
<span class="quotelev1">&gt; migrate-n: error while loading shared libraries: libmpi.so.0:  
</span><br>
<span class="quotelev1">&gt; cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; avierstr_at_muscorum:~&gt; echo $PATH
</span><br>
<span class="quotelev1">&gt; /home/avierstr/bin:/usr/local/bin:/usr/bin:/usr/X11R6/bin:/bin:/usr/ 
</span><br>
<span class="quotelev1">&gt; games:/opt/gnome/bin:/opt/kde3/bin:/usr/lib/mit/bin:/usr/lib/mit/ 
</span><br>
<span class="quotelev1">&gt; sbin:/usr/local/openmpi-1.1a1/bin:/usr/local/Modeltest3.7/source:/ 
</span><br>
<span class="quotelev1">&gt; usr/local/mrbayes-3.1.2:/usr/local/bin:/usr/local/MrModeltest2.2:/ 
</span><br>
<span class="quotelev1">&gt; usr/local/paup4b10:/usr/local/mrbayes-3.1.2-mpi:/usr/local/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.1a1/lib:/usr/local/migrate-2.1.3-mpi/src:/usr/local/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.1a1/bin:/usr/local/Modeltest3.7/source:/usr/local/ 
</span><br>
<span class="quotelev1">&gt; mrbayes-3.1.2:/usr/local/bin:/usr/local/MrModeltest2.2:/usr/local/ 
</span><br>
<span class="quotelev1">&gt; paup4b10:/usr/local/mrbayes-3.1.2-mpi:/usr/local/openmpi-1.1a1/lib:/ 
</span><br>
<span class="quotelev1">&gt; usr/local/migrate-2.1.3-mpi/src:/usr/local/Modeltest3.7/source:/usr/ 
</span><br>
<span class="quotelev1">&gt; local/mrbayes-3.1.2:/usr/local/bin:/usr/local/MrModeltest2.2:/usr/ 
</span><br>
<span class="quotelev1">&gt; local/paup4b10:/usr/local/mrbayes-3.1.2-mpi:/usr/local/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.1a1/lib:/usr/local/migrate-2.1.3-mpi/src
</span><br>
<span class="quotelev1">&gt; avierstr_at_muscorum:~&gt; mpiexec -np 2 migrate-mpi
</span><br>
<span class="quotelev1">&gt; orted: error while loading shared libraries: liborte.so.0: cannot  
</span><br>
<span class="quotelev1">&gt; open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; [muscorum:12220] ERROR: A daemon on node localhost failed to start  
</span><br>
<span class="quotelev1">&gt; as expected.
</span><br>
<span class="quotelev1">&gt; [muscorum:12220] ERROR: There may be more information available from
</span><br>
<span class="quotelev1">&gt; [muscorum:12220] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev1">&gt; [muscorum:12220] ERROR: The daemon exited unexpectedly with status  
</span><br>
<span class="quotelev1">&gt; 127.
</span><br>
<span class="quotelev1">&gt; avierstr_at_muscorum:~&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Peter Beerli wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Dear Brian, The original poster intended to run migrate-n in  
</span><br>
<span class="quotelev2">&gt;&gt; parallel mode, but the stdout fragment shows that the program was  
</span><br>
<span class="quotelev2">&gt;&gt; compiled for a non-MPI architecture (either single CPU or SMP  
</span><br>
<span class="quotelev2">&gt;&gt; pthreads) [I talked with him list-offline and it used pthreads]. A  
</span><br>
<span class="quotelev2">&gt;&gt; version for parallel runs shows this fact in its first couple of  
</span><br>
<span class="quotelev2">&gt;&gt; lines, like this (&lt;@@@@):  
</span><br>
<span class="quotelev2">&gt;&gt; ============================================= MIGRATION RATE AND  
</span><br>
<span class="quotelev2">&gt;&gt; POPULATION SIZE ESTIMATION    using Markov Chain Monte Carlo  
</span><br>
<span class="quotelev2">&gt;&gt; simulation ============================================= compiled  
</span><br>
<span class="quotelev2">&gt;&gt; for a PARALLEL COMPUTER ARCHITECTURE &lt;@@@@@@@@@@@@@@@@@@@@@@@@@  
</span><br>
<span class="quotelev2">&gt;&gt; Version debug 2.1.3 [x] Program started at Wed Feb 8 12:29:35 2006  
</span><br>
<span class="quotelev2">&gt;&gt; As far as I am concerned migrate-n compiles and runs on openmpi  
</span><br>
<span class="quotelev2">&gt;&gt; 1.0.1. There might be some use in running the program multiple  
</span><br>
<span class="quotelev2">&gt;&gt; times completely independently through openmpi or lam for  
</span><br>
<span class="quotelev2">&gt;&gt; simulation purposes, but that would not be a typical use of the  
</span><br>
<span class="quotelev2">&gt;&gt; program that can distribute multiple genetic loci on multiple  
</span><br>
<span class="quotelev2">&gt;&gt; nodes and only having the master handling input and output (when  
</span><br>
<span class="quotelev2">&gt;&gt; compiled using configure; make mpis or configure;make mpi) Peter  
</span><br>
<span class="quotelev2">&gt;&gt; ---- Peter Beerli, Computational Evolutionary Biology Group School  
</span><br>
<span class="quotelev2">&gt;&gt; of Computational Science (SCS) and Biological Sciences Department  
</span><br>
<span class="quotelev2">&gt;&gt; 150-T Dirac Science Library Florida State University Tallahassee,  
</span><br>
<span class="quotelev2">&gt;&gt; Florida 32306-4120 USA Webpage: <a href="http://www.csit.fsu.edu/~beerli">http://www.csit.fsu.edu/~beerli</a>  
</span><br>
<span class="quotelev2">&gt;&gt; Phone: 850.645.1324 Fax: 850.644.0094 On Feb 8, 2006, at 11:24 AM,  
</span><br>
<span class="quotelev2">&gt;&gt; Brian Barrett wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think we fixed this over this last weekend. I believe the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problem was our mis-handling of standard input in some cases. I  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; believe I was able to get the application running (but I could be  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fooling myself there...).  Could you download the latest nightly  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; build from the URL below and see if it works for you? The fixes  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are scheduled to be part of Open MPI 1.0.2, which should be out  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; real soon now. <a href="http://www.open-mpi.org/nightly/trunk/">http://www.open-mpi.org/nightly/trunk/</a> Thanks,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian On Feb 3, 2006, at 10:23 AM, Andy Vierstraete wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi, I have installed Migrate 2.1.2, but it fails to run on open- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI (it does run on LAM-MPI : see end of mail) my system is Suse  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 10 on Athlon X2 hostfile : localhost slots=2 max_slots=2 I tried  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; different commands : 1. does not start : error message :  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ****************************************** avierstr_at_muscorum:~/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; thomas&gt; mpiexec -np 2 migrate-mpi mpiexec noticed that job rank  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1 with PID 0 on node &quot;localhost&quot; exited on signal 11. [muscorum: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 07212] ERROR: A daemon on node localhost failed to start as  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; expected. [muscorum:07212] ERROR: There may be more information  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available from [muscorum:07212] ERROR: the remote shell (see  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; above). [muscorum:07212] The daemon received a signal 11. 1  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; additional process aborted (not shown)  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ************************************************ 2. starts a non- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ending loop : ************************************************  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; avierstr_at_muscorum:~/thomas&gt; mpirun -np 2 --hostfile ./hostfile  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; migrate-mpi migrate-mpi  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ============================================= MIGRATION RATE AND  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; POPULATION SIZE ESTIMATION using Markov Chain Monte Carlo  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; simulation ============================================= Version  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2.1.2 Program started at Fri Feb 3 15:58:57 2006 Settings for  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; this run: D Data type currently set to: DNA sequence model I  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Input/Output formats P Parameters  [start, migration model] S  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Search strategy W Write a parmfile Q Quit the program Are the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; settings correct?   (Type Y or the letter for one to change)  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Settings for this run: D Data type currently set to: DNA  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sequence model I Input/Output formats P Parameters [start,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; migration model] S Search strategy W Write a parmfile Q Quit the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; program Are the settings correct? (Type Y or the letter for one  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to change) Settings for this run:   D Data type currently set  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to: DNA sequence model I Input/Output formats P Parameters  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [start, migration model] S Search strategy W Write a parmfile Q  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Quit the program Are the settings correct? (Type Y or the letter  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for one to change) Settings for this run: D Data type currently  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; set to: DNA sequence model I Input/Output formats P Parameters  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [start, migration model] S Search strategy W Write a parmfile Q  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Quit the program Are the settings correct? (Type Y or the letter  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for one to change) Settings for this run: D Data type currently  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; set to: DNA sequence model I Input/Output formats P Parameters  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [start, migration model] S Search strategy W Write a parmfile Q  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Quit the program Are the settings correct? (Type Y or the letter  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for one to change) igration model] S Search strategy W Write a  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; parmfile Q Quit the program Are the settings correct? (Type Y or  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the letter for one to change) Settings for this run: D Data type  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; currently set to: DNA sequence model I Input/Output formats P  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Parameters [start, migration model] S Search strategy W Write a  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; parmfile Q Quit the program Are the settings correct? (Type Y or  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the letter for one to change) Settings for this run: D Data type  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; currently set to: DNA sequence model I Input/Output formats P  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Parameters [start, migration model] S Search strategy W Write a  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; parmfile Q Quit the program Are the settings correct? (Type Y or  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the letter for one to change) Settings for this run: D Data type  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; currently set to: DNA sequence model I       Input/Output  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; formats P Parameters [start, migration model] S Search strategy  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; W Write a parmfile Q Quit the program Are the settings correct?  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ****************************************************************  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 3. with LAM-MPI on Suse 8.2 it works after lamboot hostfile :  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ****************************************************************  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; avierstr_at_molfyl1:~/migrate-2.1.0/src&gt; mpiexec -np 2 ./migrate-n  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ============================================= MIGRATION RATE AND  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; POPULATION SIZE ESTIMATION using Markov Chain Monte Carlo  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; simulation =============================================  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Version  2.1.0 Program started at Fri Feb 3 14:05:05 2006  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Settings for this run: D Data type currently set to: DNA  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sequence model I Input/Output formats P Parameters [start,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; migration model] S Search strategy W Write a parmfile Q Quit the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; program Are the settings correct? (Type Y or the letter for one  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to change) =============================================  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MIGRATION RATE AND POPULATION SIZE ESTIMATION using Markov Chain  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Monte Carlo simulation  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ============================================= Version 2.1.0  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Program started at   Fri Feb 3 14:05:05 2006 Settings for this  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; run: D Data type currently set to: DNA sequence model I Input/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Output formats P Parameters [start, migration model] S Search  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; strategy W Write a parmfile Q Quit the program Are the settings  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; correct? (Type Y or the letter for one to change) y Reading  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; BALTIC ... Reading WE ... Reading WS ... Reading YTH ... Reading  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SEI ... Reading EL ... Reading KILK ... Reading GI ... Reading  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; RdA ... Reading GU ... Options in use: --------------- Datatype:  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; DNA sequence data Random number seed (with internal timer)  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1138971909 Start parameters: Theta values were generated from  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the FST-calculation M values were generated from the FST- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; calculation Migration model: ........... --  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ******************************************************************* 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ** * Youth is a wonderful thing. What a crime to waste it on  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; children. * * (George Bernard Shaw) *  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ******************************************************************* 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ** Andy Vierstraete Department of Biology University of Ghent K.  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; L. Ledeganckstraat 35 B-9000 Gent Belgium phone : 09-264.52.66  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fax : 09-264.87.93 <a href="http://allserv.UGent.be/~avierstr/">http://allserv.UGent.be/~avierstr/</a>  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________ users mailing  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; list users_at_[hidden] <a href="http://www.open-mpi.org/mailman/">http://www.open-mpi.org/mailman/</a> 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; listinfo.cgi/users
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Brian Barrett Open MPI developer <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________ users mailing  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; list users_at_[hidden] <a href="http://www.open-mpi.org/mailman/">http://www.open-mpi.org/mailman/</a> 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; listinfo.cgi/users
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________ users mailing list  
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --  
</span><br>
<span class="quotelev1">&gt; *********************************************************************  
</span><br>
<span class="quotelev1">&gt; * Youth is a wonderful thing. What a crime to waste it on children.  
</span><br>
<span class="quotelev1">&gt; * * (George Bernard Shaw) *  
</span><br>
<span class="quotelev1">&gt; *********************************************************************  
</span><br>
<span class="quotelev1">&gt; Andy Vierstraete Department of Biology University of Ghent K. L.  
</span><br>
<span class="quotelev1">&gt; Ledeganckstraat 35 B-9000 Gent Belgium phone : 09-264.52.66 fax :  
</span><br>
<span class="quotelev1">&gt; 09-264.87.93 <a href="http://allserv.UGent.be/~avierstr/">http://allserv.UGent.be/~avierstr/</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>&quot;Half of what I say is meaningless; but I say it so that the other  
<br>
half may reach you&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kahlil Gibran
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0636.php">James Conway: "[OMPI users] Cannonical ring program and Mac OSX 10.4.4"</a>
<li><strong>Previous message:</strong> <a href="0634.php">Andy Vierstraete: "Re: [OMPI users] [O-MPI users] problem running Migrate with open-MPI"</a>
<li><strong>In reply to:</strong> <a href="0633.php">Andy Vierstraete: "Re: [OMPI users] [O-MPI users] problem running Migrate with open-MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0648.php">Andy Vierstraete: "Re: [OMPI users] problem running Migrate with open-MPI"</a>
<li><strong>Reply:</strong> <a href="0648.php">Andy Vierstraete: "Re: [OMPI users] problem running Migrate with open-MPI"</a>
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
