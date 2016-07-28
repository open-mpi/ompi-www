<?
$subject_val = "Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 28 11:51:41 2009" -->
<!-- isoreceived="20090428155141" -->
<!-- sent="Tue, 28 Apr 2009 16:52:49 +0100" -->
<!-- isosent="20090428155249" -->
<!-- name="Hugh Dickinson" -->
<!-- email="h.j.dickinson_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file" -->
<!-- id="4CF2CBD4-B263-4A95-B4C6-51459993AFCA_at_dur.ac.uk" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="A7744018-C155-4A8A-BE5C-242FE61D025C_at_dur.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file<br>
<strong>From:</strong> Hugh Dickinson (<em>h.j.dickinson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-28 11:52:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9125.php">jody: "Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file"</a>
<li><strong>Previous message:</strong> <a href="9123.php">Hugh Dickinson: "Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file"</a>
<li><strong>In reply to:</strong> <a href="9123.php">Hugh Dickinson: "Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9125.php">jody: "Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file"</a>
<li><strong>Reply:</strong> <a href="9125.php">jody: "Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi again,
<br>
<p>I tried a simple mpi c++ program:
<br>
<p><pre>
--
#include &lt;iostream&gt;
#include &lt;mpi.h&gt;
using namespace MPI;
using namespace std;
int main(int argc, char* argv[]) {
   int rank,size;
   Init(argc,argv);
   rank=COMM_WORLD.Get_rank();
   size=COMM_WORLD.Get_size();
   cout &lt;&lt; &quot;P:&quot; &lt;&lt; rank &lt;&lt; &quot; out of &quot; &lt;&lt; size &lt;&lt; endl;
   Finalize();
}
--
It didn't work over all the nodes, again same problem - the system  
seems to hang. However, by  forcing mpirun to use only the node on  
which I'm launching mpirun I get some more error messages
--
libibverbs: Fatal: couldn't read uverbs ABI version.
libibverbs: Fatal: couldn't read uverbs ABI version.
------------------------------------------------------------------------ 
--
[0,1,0]: OpenIB on host gamma2 was unable to find any HCAs.
Another transport will be used instead, although this may result in
lower performance.
------------------------------------------------------------------------ 
--
------------------------------------------------------------------------ 
--
[0,1,1]: OpenIB on host gamma2 was unable to find any HCAs.
Another transport will be used instead, although this may result in
lower performance.
------------------------------------------------------------------------ 
--
------------------------------------------------------------------------ 
--
[0,1,1]: uDAPL on host gamma2 was unable to find any NICs.
Another transport will be used instead, although this may result in
lower performance.
------------------------------------------------------------------------ 
--
------------------------------------------------------------------------ 
--
[0,1,0]: uDAPL on host gamma2 was unable to find any NICs.
Another transport will be used instead, although this may result in
lower performance.
------------------------------------------------------------------------ 
--
--
However, as before the program does work in this special case, and I  
get:
--
P:0 out of 2
P:1 out of 2
--
Do these errors indicate a problem with the Open MPI installation?
Hugh
On 28 Apr 2009, at 16:36, Hugh Dickinson wrote:
&gt; Hi Jody,
&gt;
&gt; I can paswordlessly ssh between all nodes (to and from)
&gt; Almost none of these mpirun commands work. The only working case is  
&gt; if nodenameX is the node from which you are running the command. I  
&gt; don't know if this gives you extra diagnostic information, but if I  
&gt; explicitly set the wrong prefix (using --prefix), then I get errors  
&gt; from all the nodes telling me the daemon would not start. I don't  
&gt; get these errors normally. It seems to me that the communication is  
&gt; working okay, at least in the outwards direction (and from all  
&gt; nodes). Could this be a problem with forwarding of standard output?  
&gt; If I were to try a simple hello world program, is this more likely  
&gt; to work, or am I just adding another layer of complexity?
&gt;
&gt; Cheers,
&gt;
&gt; Hugh
&gt;
&gt; On 28 Apr 2009, at 15:55, jody wrote:
&gt;
&gt;&gt; Hi Hugh
&gt;&gt; You're right, there is no initialization command (like lamboot)  you
&gt;&gt; have to call.
&gt;&gt;
&gt;&gt; I don't really know why your sewtup doesn't work, so i'm making some
&gt;&gt; more &quot;blind shots&quot;
&gt;&gt;
&gt;&gt; can you do passwordless ssh from between any two of your nodes?
&gt;&gt;
&gt;&gt; does
&gt;&gt;  mpirun -np 1 --host nodenameX uptime
&gt;&gt; work for every X when called from any of your nodes?
&gt;&gt;
&gt;&gt; Have you tried
&gt;&gt;    mpirun -np 2 --host nodename1,nodename2  uptime
&gt;&gt; (i.e. not using the host file)
&gt;&gt;
&gt;&gt; Jody
&gt;&gt;
&gt;&gt; On Tue, Apr 28, 2009 at 4:37 PM, Hugh Dickinson
&gt;&gt; &lt;h.j.dickinson_at_[hidden]&gt; wrote:
&gt;&gt;&gt; Hi Jody,
&gt;&gt;&gt;
&gt;&gt;&gt; The node names are exactly the same. I wanted to avoid updating  
&gt;&gt;&gt; the version
&gt;&gt;&gt; because I'm not the system administrator, and it could take some  
&gt;&gt;&gt; time before
&gt;&gt;&gt; it gets done. If it's likely to fix the problem though I'll try  
&gt;&gt;&gt; it. I'm
&gt;&gt;&gt; assuming that I don't have to do something analogous to the old  
&gt;&gt;&gt; &quot;lamboot&quot;
&gt;&gt;&gt; command to initialise Open MPI on all the nodes. I've seen no  
&gt;&gt;&gt; documentation
&gt;&gt;&gt; anywhere that says I should.
&gt;&gt;&gt;
&gt;&gt;&gt; Cheers,
&gt;&gt;&gt;
&gt;&gt;&gt; Hugh
&gt;&gt;&gt;
&gt;&gt;&gt; On 28 Apr 2009, at 15:28, jody wrote:
&gt;&gt;&gt;
&gt;&gt;&gt;&gt; Hi Hugh
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; Again, just to make sure, are the hostnames in your host file  
&gt;&gt;&gt;&gt; well-known?
&gt;&gt;&gt;&gt; I.e. when you say you can do
&gt;&gt;&gt;&gt;  ssh nodename uptime
&gt;&gt;&gt;&gt; do you use exactly the same nodename in your host file?
&gt;&gt;&gt;&gt; (I'm trying to eliminate all non-Open-MPI error sources,
&gt;&gt;&gt;&gt; because with your setup it should basically work.)
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; One more point to consider is to  update to Open-MPI 1.3.
&gt;&gt;&gt;&gt; I don't think your OPen-MPI version is the cause of your trouble,
&gt;&gt;&gt;&gt; but there have been quite some changes since v1.2.5
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; Jody
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; On Tue, Apr 28, 2009 at 3:22 PM, Hugh Dickinson
&gt;&gt;&gt;&gt; &lt;h.j.dickinson_at_[hidden]&gt; wrote:
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; Hi Jody,
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; Indeed, all the nodes are running the same version of Open MPI.  
&gt;&gt;&gt;&gt;&gt; Perhaps I
&gt;&gt;&gt;&gt;&gt; was incorrect to describe the cluster as heterogeneous. In  
&gt;&gt;&gt;&gt;&gt; fact, all the
&gt;&gt;&gt;&gt;&gt; nodes run the same operating system (Scientific Linux 5.2),  
&gt;&gt;&gt;&gt;&gt; it's only the
&gt;&gt;&gt;&gt;&gt; hardware that's different and even then they're all i386 or  
&gt;&gt;&gt;&gt;&gt; i686. I'm
&gt;&gt;&gt;&gt;&gt; also
&gt;&gt;&gt;&gt;&gt; attaching the output of ompi_info --all as I've seen it's  
&gt;&gt;&gt;&gt;&gt; suggested in
&gt;&gt;&gt;&gt;&gt; the
&gt;&gt;&gt;&gt;&gt; mailing list instructions.
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; Cheers,
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; Hugh
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; Hi Hugh
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; Just to make sure:
&gt;&gt;&gt;&gt;&gt; You have installed Open-MPI on all your nodes?
&gt;&gt;&gt;&gt;&gt; Same version everywhere?
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; Jody
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; On Tue, Apr 28, 2009 at 12:57 PM, Hugh Dickinson
&gt;&gt;&gt;&gt;&gt; &lt;h.j.dickinson_at_[hidden]&gt; wrote:
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; Hi all,
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; First of all let me make it perfectly clear that I'm a  
&gt;&gt;&gt;&gt;&gt;&gt; complete beginner
&gt;&gt;&gt;&gt;&gt;&gt; as
&gt;&gt;&gt;&gt;&gt;&gt; far as MPI is concerned, so this may well be a trivial problem!
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; I've tried to set up Open MPI to use SSH to communicate  
&gt;&gt;&gt;&gt;&gt;&gt; between nodes on
&gt;&gt;&gt;&gt;&gt;&gt; a
&gt;&gt;&gt;&gt;&gt;&gt; heterogeneous cluster. I've set up passwordless SSH and it  
&gt;&gt;&gt;&gt;&gt;&gt; seems to be
&gt;&gt;&gt;&gt;&gt;&gt; working fine. For example by hand I can do:
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; ssh nodename uptime
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; and it returns the appropriate information for each node.
&gt;&gt;&gt;&gt;&gt;&gt; I then tried running a non-MPI program on all the nodes at the  
&gt;&gt;&gt;&gt;&gt;&gt; same
&gt;&gt;&gt;&gt;&gt;&gt; time:
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; mpirun -np 10 --hostfile hostfile uptime
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; Where hostfile is a list of the 10 cluster node names with  
&gt;&gt;&gt;&gt;&gt;&gt; slots=1 after
&gt;&gt;&gt;&gt;&gt;&gt; each one i.e
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; nodename1 slots=1
&gt;&gt;&gt;&gt;&gt;&gt; nodename2 slots=2
&gt;&gt;&gt;&gt;&gt;&gt; etc...
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; Nothing happens! The process just seems to hang. If I  
&gt;&gt;&gt;&gt;&gt;&gt; interrupt the
&gt;&gt;&gt;&gt;&gt;&gt; process
&gt;&gt;&gt;&gt;&gt;&gt; with Ctrl-C I get:
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; &quot;
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; mpirun: killing job...
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; [gamma2.phyastcl.dur.ac.uk:18124] [0,0,0] ORTE_ERROR_LOG:  
&gt;&gt;&gt;&gt;&gt;&gt; Timeout in
&gt;&gt;&gt;&gt;&gt;&gt; file
&gt;&gt;&gt;&gt;&gt;&gt; base/pls_base_orted_cmds.c at line 275
&gt;&gt;&gt;&gt;&gt;&gt; [gamma2.phyastcl.dur.ac.uk:18124] [0,0,0] ORTE_ERROR_LOG:  
&gt;&gt;&gt;&gt;&gt;&gt; Timeout in
&gt;&gt;&gt;&gt;&gt;&gt; file
&gt;&gt;&gt;&gt;&gt;&gt; pls_rsh_module.c at line 1166
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; ----------------------------------------------------------------- 
&gt;&gt;&gt;&gt;&gt;&gt; ---------
&gt;&gt;&gt;&gt;&gt;&gt; WARNING: mpirun has exited before it received notification  
&gt;&gt;&gt;&gt;&gt;&gt; that all
&gt;&gt;&gt;&gt;&gt;&gt; started processes had terminated.  You should double check and  
&gt;&gt;&gt;&gt;&gt;&gt; ensure
&gt;&gt;&gt;&gt;&gt;&gt; that there are no runaway processes still executing.
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; ----------------------------------------------------------------- 
&gt;&gt;&gt;&gt;&gt;&gt; ---------
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; &quot;
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; If, instead of using the hostfile, I specify on the command  
&gt;&gt;&gt;&gt;&gt;&gt; line the
&gt;&gt;&gt;&gt;&gt;&gt; host
&gt;&gt;&gt;&gt;&gt;&gt; from which I'm running mpirun, e.g.:
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; mpirun -np 1 --host nodename uptime
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; then it works (i.e. if it doesn't need to communicate with  
&gt;&gt;&gt;&gt;&gt;&gt; other nodes).
&gt;&gt;&gt;&gt;&gt;&gt; Do
&gt;&gt;&gt;&gt;&gt;&gt; I need to tell Open MPI it should be using SSH to communicate?  
&gt;&gt;&gt;&gt;&gt;&gt; If so,
&gt;&gt;&gt;&gt;&gt;&gt; how
&gt;&gt;&gt;&gt;&gt;&gt; do
&gt;&gt;&gt;&gt;&gt;&gt; I do this? To be honest I think it's trying to do so, because  
&gt;&gt;&gt;&gt;&gt;&gt; before I
&gt;&gt;&gt;&gt;&gt;&gt; set
&gt;&gt;&gt;&gt;&gt;&gt; up passwordless SSH it challenged me for lots of passwords.
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; I'm running Open MPI 1.2.5 installed with Scientific Linux  
&gt;&gt;&gt;&gt;&gt;&gt; 5.2. Let me
&gt;&gt;&gt;&gt;&gt;&gt; reiterate, it's very likely that I've done something stupid,  
&gt;&gt;&gt;&gt;&gt;&gt; so all
&gt;&gt;&gt;&gt;&gt;&gt; suggestions are welcome.
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; Cheers,
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; Hugh
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt;&gt;&gt; users mailing list
&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt;&gt; users mailing list
&gt;&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt;
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; users mailing list
&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt;
&gt;&gt;
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9125.php">jody: "Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file"</a>
<li><strong>Previous message:</strong> <a href="9123.php">Hugh Dickinson: "Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file"</a>
<li><strong>In reply to:</strong> <a href="9123.php">Hugh Dickinson: "Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9125.php">jody: "Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file"</a>
<li><strong>Reply:</strong> <a href="9125.php">jody: "Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file"</a>
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
