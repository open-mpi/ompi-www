<?
$subject_val = "[OMPI users] Problem to Run Hello World on a desktop with Cygwin and OpenMPI 1.7.5";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 30 07:45:58 2014" -->
<!-- isoreceived="20140530114558" -->
<!-- sent="Fri, 30 May 2014 12:45:57 +0100" -->
<!-- isosent="20140530114557" -->
<!-- name="Sergii Veremieiev" -->
<!-- email="s.veremieiev_at_[hidden]" -->
<!-- subject="[OMPI users] Problem to Run Hello World on a desktop with Cygwin and OpenMPI 1.7.5" -->
<!-- id="CAHaow_8=Q3rs=9tCezdTb6dJ7yOqVqmWV9DzZLN98yB-yDmdZQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Problem to Run Hello World on a desktop with Cygwin and OpenMPI 1.7.5<br>
<strong>From:</strong> Sergii Veremieiev (<em>s.veremieiev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-30 07:45:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24515.php">Тимур Исмагилов: "[OMPI users] [warn] Epoll ADD(1) on fd 0 failed"</a>
<li><strong>Previous message:</strong> <a href="24513.php">Fernando Cruz: "[OMPI users] MPI installation problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24516.php">Marco Atzeri: "Re: [OMPI users] Problem to Run Hello World on a desktop with Cygwin and OpenMPI 1.7.5"</a>
<li><strong>Reply:</strong> <a href="24516.php">Marco Atzeri: "Re: [OMPI users] Problem to Run Hello World on a desktop with Cygwin and OpenMPI 1.7.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Sir/Madam,
<br>
<p><p><p>I'm trying to compile and run a simple &quot;Hello World&quot; C++/MPI code on my
<br>
personal desktop machine (6-core Intel Core i7-3930K CPU with Windows 7 SP1
<br>
and Cygwin with the default built-in Open MPI 1.7.5 and GCC 4.8.2). I'm
<br>
beginner with this, never run parallel codes on desktops, only on a
<br>
cluster. Here is the code:
<br>
<p><p><p>using namespace std;
<br>
<p>#include &quot;mpi.h&quot;
<br>
<p>int main(int argc, char *argv[])
<br>
<p>{
<br>
<p>&nbsp;&nbsp;&nbsp;int noprocs, nid;
<br>
<p>&nbsp;&nbsp;&nbsp;MPI::Init(argc,argv);
<br>
<p>&nbsp;&nbsp;&nbsp;nid = MPI::COMM_WORLD.Get_rank();
<br>
<p>&nbsp;&nbsp;&nbsp;noprocs = MPI::COMM_WORLD.Get_size();
<br>
<p>&nbsp;&nbsp;&nbsp;if (nid==0) cout &lt;&lt; &quot;Hello from processor &quot; &lt;&lt; nid &lt;&lt; &quot; of &quot; &lt;&lt; noprocs
<br>
&lt;&lt; endl;
<br>
<p>&nbsp;&nbsp;&nbsp;MPI::Finalize();
<br>
<p>}
<br>
<p><p><p>Using &#226;&#128;&#156;mpicxx -o Hello Hello.cpp&#226;&#128;&#157; the code compiles without any problems
<br>
and generates an executable. However when I try to run the code using
<br>
&#226;&#128;&#156;mpirun -np 1 Hello&#226;&#128;&#157; or &#226;&#128;&#156;mpiexec -n 1 Hello&#226;&#128;&#157; the following error message is
<br>
returned:
<br>
<p><p><p>[byenr502b-01f:06620] opal_os_dirpath_create: Error: Unable to create the
<br>
sub-directory (/tmp/openmpi-sessions-enrsvere_at_byenr502b-01f_0/11302) of
<br>
(/tmp/openmpi-sessions-enrsvere_at_byenr502b-01f_0/11302/0/0), mkdir failed [1]
<br>
<p>[byenr502b-01f:06620] [[11302,0],0] ORTE_ERROR_LOG: Error in file
<br>
/pub/devel/openmpi/openmpi-1.7.5-1/src/openmpi-1.7.5/orte/util/session_dir.c
<br>
at line 107
<br>
<p>[byenr502b-01f:06620] [[11302,0],0] ORTE_ERROR_LOG: Error in file
<br>
/pub/devel/openmpi/openmpi-1.7.5-1/src/openmpi-1.7.5/orte/util/session_dir.c
<br>
at line 402
<br>
<p>[byenr502b-01f:06620] [[11302,0],0] ORTE_ERROR_LOG: Error in file
<br>
/pub/devel/openmpi/openmpi-1.7.5-1/src/openmpi-1.7.5/orte/mca/ess/hnp/ess_hnp_module.c
<br>
at line 604
<br>
<p>--------------------------------------------------------------------------
<br>
<p>It looks like orte_init failed for some reason; your parallel process is
<br>
<p>likely to abort.  There are many reasons that a parallel process can
<br>
<p>fail during orte_init; some of which are due to configuration or
<br>
<p>environment problems.  This failure appears to be an internal failure;
<br>
<p>here's some additional information (which may only be relevant to an
<br>
<p>Open MPI developer):
<br>
<p>&nbsp;&nbsp;orte_session_dir failed
<br>
<p>&nbsp;&nbsp;--&gt; Returned value Error (-1) instead of ORTE_SUCCESS
<br>
<p>--------------------------------------------------------------------------
<br>
<p><p><p>Please help me to understand what is the problem. For your information here
<br>
is the output of the following commands:
<br>
<p><p><p>$ echo $PATH
<br>
<p>/usr/local/bin:/usr/bin:/cygdrive/c/Program Files (x86)/NVIDIA
<br>
Corporation/PhysX/Common:/cygdrive/c/Program Files (x86)/Intel/iCLS
<br>
Client:/cygdrive/c/Program Files/Intel/iCLS
<br>
Client:/cygdrive/c/Windows/system32:/cygdrive/c/Windows:/cygdrive/c/Windows/System32/Wbem:/cygdrive/c/Windows/System32/WindowsPowerShell/v1.0:/cygdrive/c/Program
<br>
Files/Intel/Intel(R) Management Engine Components/DAL:/cygdrive/c/Program
<br>
Files/Intel/Intel(R) Management Engine Components/IPT:/cygdrive/c/Program
<br>
Files (x86)/Intel/Intel(R) Management Engine
<br>
Components/DAL:/cygdrive/c/Program Files (x86)/Intel/Intel(R) Management
<br>
Engine Components/IPT:/cygdrive/d/Program Files/ATI
<br>
Technologies/ATI.ACE/Core-Static:/cygdrive/c/Program Files (x86)/Microsoft
<br>
SQL Server/100/Tools/Binn:/cygdrive/c/Program Files/Microsoft SQL
<br>
Server/100/Tools/Binn:/cygdrive/c/Program Files/Microsoft SQL
<br>
Server/100/DTS/Binn:/cygdrive/d/SIMULIA/Abaqus/Commands
<br>
<p><p><p>$ echo $LD_LIBRARY_PATH
<br>
<p><p><p>$ ompi_info -v ompi full --parsable
<br>
<p>ompi_info: Error: unknown option &quot;-v&quot;
<br>
<p>Type 'ompi_info --help' for usage.
<br>
<p><p><p>I also attach a lengthy output of &quot;ompi_info --all&quot;. Please do not hesitate
<br>
if you require any further information.
<br>
<p><p><p>Best regards,
<br>
<p><p><p>Sergii
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24514/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24515.php">Тимур Исмагилов: "[OMPI users] [warn] Epoll ADD(1) on fd 0 failed"</a>
<li><strong>Previous message:</strong> <a href="24513.php">Fernando Cruz: "[OMPI users] MPI installation problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24516.php">Marco Atzeri: "Re: [OMPI users] Problem to Run Hello World on a desktop with Cygwin and OpenMPI 1.7.5"</a>
<li><strong>Reply:</strong> <a href="24516.php">Marco Atzeri: "Re: [OMPI users] Problem to Run Hello World on a desktop with Cygwin and OpenMPI 1.7.5"</a>
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
