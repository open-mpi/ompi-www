<?
$subject_val = "Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 29 04:47:33 2009" -->
<!-- isoreceived="20090429084733" -->
<!-- sent="Wed, 29 Apr 2009 09:50:41 +0100" -->
<!-- isosent="20090429085041" -->
<!-- name="Hugh Dickinson" -->
<!-- email="h.j.dickinson_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file" -->
<!-- id="2E064E0C-996C-4DB9-811B-97244213C823_at_dur.ac.uk" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="06E71215-A684-4A38-943E-931D3D96769E_at_open-mpi.org" -->
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
<strong>Date:</strong> 2009-04-29 04:50:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9140.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Previous message:</strong> <a href="9138.php">Brian Blank: "[OMPI users] Purify found bugs inside open-mpi library"</a>
<li><strong>In reply to:</strong> <a href="9137.php">Ralph Castain: "Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The remote node starts the following process when mpirun is executed  
<br>
on the local node:
<br>
<p>25734 ?        Ss     0:00 /usr/lib/openmpi/1.2.5-gcc/bin/orted -- 
<br>
bootproxy 1 --
<br>
<p>I checked and it was not running before mpirun was executed.
<br>
<p>I'll look into installing a more recent version of Open MPI.
<br>
<p>Hugh
<br>
<p>On 29 Apr 2009, at 00:11, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Best I can tell, the remote orted never got executed - it looks to  
</span><br>
<span class="quotelev1">&gt; me like there is something that blocks the ssh from working. Can you  
</span><br>
<span class="quotelev1">&gt; get into another window and ssh to the remote node? If so, can you  
</span><br>
<span class="quotelev1">&gt; do a ps and verify that the orted is actually running there?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun is using the same shell on the remote end as you are using  
</span><br>
<span class="quotelev1">&gt; when you start it. One thing I see that is strange is your entire  
</span><br>
<span class="quotelev1">&gt; environment is being sent along - I'll have to look at the 1.2.x  
</span><br>
<span class="quotelev1">&gt; code as I didn't think we were doing that (been a long time since I  
</span><br>
<span class="quotelev1">&gt; looked though).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 28, 2009, at 4:57 PM, Hugh Dickinson wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As far as I can tell, both the PATH and LD_LIBRARY_PATH are set  
</span><br>
<span class="quotelev2">&gt;&gt; correctly. I've tried with the full path to the mpirun executable  
</span><br>
<span class="quotelev2">&gt;&gt; and using the --prefix command line option. Neither works. The  
</span><br>
<span class="quotelev2">&gt;&gt; debug output seems to contain a lot of system specific information  
</span><br>
<span class="quotelev2">&gt;&gt; (IPs, usernames and such), which I'm a little reticent to share on  
</span><br>
<span class="quotelev2">&gt;&gt; an open mailing list. As such I've censored that information.  
</span><br>
<span class="quotelev2">&gt;&gt; Hopefully the rest is still of use. One thing I did notice is that  
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI seems to want to use sh instead of bash (which is the  
</span><br>
<span class="quotelev2">&gt;&gt; shell I use). Is that what's meant by the following lines?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [gamma2.censored_domain:22554] pls:rsh: local csh: 0, local sh: 1
</span><br>
<span class="quotelev2">&gt;&gt; [gamma2.censored_domain:22554] pls:rsh: assuming same remote shell  
</span><br>
<span class="quotelev2">&gt;&gt; as local shell
</span><br>
<span class="quotelev2">&gt;&gt; [gamma2.censored_domain:22554] pls:rsh: remote csh: 0, remote sh: 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If so is there a way to make it use bash?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hugh
</span><br>
<span class="quotelev2">&gt;&gt; &lt;debug_output&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 28 Apr 2009, at 22:30, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Okay, that's one small step forward. You can lock that in by  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; setting the appropriate MCA parameter in one of two ways:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. add the following to your default mca parameter file:  btl =  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tcp,sm,self (I added the shared memory subsystem as this will help  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with performance). You can see how to do this here:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=tuning#setting-mca-params">http://www.open-mpi.org/faq/?category=tuning#setting-mca-params</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. add OMPI_MCA_btl=tcp,sm,self to the environment in your .cshrc  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (or equivalent) file
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Next, have you looked at the following FAQ:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=running#missing-prereqs">http://www.open-mpi.org/faq/?category=running#missing-prereqs</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Are those things all okay? Have you tried providing a complete  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; absolute path when running mpirun (e.g., using /usr/local/openmpi/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bin/mpirun instead of just mpirun on the cmd line)?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Another thing to try: add --debug-devel to the cmd line and send  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; us the (probably verbose) output.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 28, 2009, at 3:19 PM, Hugh Dickinson wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Yes I'm using ethernet connections. Doing as you suggest removes  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the errors generated by running the small test program, but still  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; doesn't allow programs (including the small test program) to  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; execute on any node other than the one launching mpirun. If I try  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to do that, the command hangs until I interrupt it, whereupon it  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; gives the same timeout errors. It seems that there must be some  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; problem with the setup of my Open MPI installation. Do you agree,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and do you have any idea what it is? Also, is there a global  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; settings file so I can instruct Open MPI to always only try  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ethernet?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hugh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 28 Apr 2009, at 20:12, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; In this instance, OMPI is complaining that you are attempting to  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; use Infiniband, but no suitable devices are found.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I assume you have Ethernet between your nodes? Can you run this  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; with the following added to your mpirun cmd line:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -mca btl tcp,self
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; That will cause OMPI to ignore the Infiniband subsystem and  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; attempt to run via TCP over any available Ethernet.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Tue, Apr 28, 2009 at 12:16 PM, Hugh Dickinson &lt;h.j.dickinson_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Many thanks for your help nonetheless.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hugh
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 28 Apr 2009, at 17:23, jody wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi Hugh
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm sorry, but i must admit that i have never encountered these  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; messages,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and i don't know what their cause exactly is.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Perhaps one of the developers can give an explanation?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jody
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Tue, Apr 28, 2009 at 5:52 PM, Hugh Dickinson
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;h.j.dickinson_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi again,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I tried a simple mpi c++ program:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; using namespace MPI;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; using namespace std;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; int main(int argc, char* argv[]) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  int rank,size;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Init(argc,argv);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  rank=COMM_WORLD.Get_rank();
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  size=COMM_WORLD.Get_size();
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  cout &lt;&lt; &quot;P:&quot; &lt;&lt; rank &lt;&lt; &quot; out of &quot; &lt;&lt; size &lt;&lt; endl;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Finalize();
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It didn't work over all the nodes, again same problem - the  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; system seems to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; hang. However, by  forcing mpirun to use only the node on which  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; launching mpirun I get some more error messages
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [0,1,0]: OpenIB on host gamma2 was unable to find any HCAs.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Another transport will be used instead, although this may result  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; lower performance.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [0,1,1]: OpenIB on host gamma2 was unable to find any HCAs.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Another transport will be used instead, although this may result  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; lower performance.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [0,1,1]: uDAPL on host gamma2 was unable to find any NICs.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Another transport will be used instead, although this may result  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; lower performance.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [0,1,0]: uDAPL on host gamma2 was unable to find any NICs.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Another transport will be used instead, although this may result  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; lower performance.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; However, as before the program does work in this special case,  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and I get:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; P:0 out of 2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; P:1 out of 2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Do these errors indicate a problem with the Open MPI installation?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hugh
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 28 Apr 2009, at 16:36, Hugh Dickinson wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi Jody,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I can paswordlessly ssh between all nodes (to and from)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Almost none of these mpirun commands work. The only working case  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; is if
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; nodenameX is the node from which you are running the command. I  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; don't know
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; if this gives you extra diagnostic information, but if I  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; explicitly set the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; wrong prefix (using --prefix), then I get errors from all the  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; nodes telling
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; me the daemon would not start. I don't get these errors  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; normally. It seems
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to me that the communication is working okay, at least in the  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; outwards
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; direction (and from all nodes). Could this be a problem with  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; forwarding of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; standard output? If I were to try a simple hello world program,  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; is this more
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; likely to work, or am I just adding another layer of complexity?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hugh
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 28 Apr 2009, at 15:55, jody wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi Hugh
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; You're right, there is no initialization command (like lamboot)   
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; you
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; have to call.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I don't really know why your sewtup doesn't work, so i'm making  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; some
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; more &quot;blind shots&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; can you do passwordless ssh from between any two of your nodes?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; does
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  mpirun -np 1 --host nodenameX uptime
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; work for every X when called from any of your nodes?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Have you tried
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  mpirun -np 2 --host nodename1,nodename2  uptime
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (i.e. not using the host file)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jody
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Tue, Apr 28, 2009 at 4:37 PM, Hugh Dickinson
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;h.j.dickinson_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi Jody,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The node names are exactly the same. I wanted to avoid updating  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; version
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; because I'm not the system administrator, and it could take some  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; time
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; before
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; it gets done. If it's likely to fix the problem though I'll try  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; it. I'm
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; assuming that I don't have to do something analogous to the old
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;lamboot&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; command to initialise Open MPI on all the nodes. I've seen no
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; documentation
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; anywhere that says I should.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hugh
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 28 Apr 2009, at 15:28, jody wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi Hugh
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Again, just to make sure, are the hostnames in your host file
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; well-known?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I.e. when you say you can do
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  ssh nodename uptime
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; do you use exactly the same nodename in your host file?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (I'm trying to eliminate all non-Open-MPI error sources,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; because with your setup it should basically work.)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; One more point to consider is to  update to Open-MPI 1.3.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I don't think your OPen-MPI version is the cause of your trouble,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; but there have been quite some changes since v1.2.5
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jody
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Tue, Apr 28, 2009 at 3:22 PM, Hugh Dickinson
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;h.j.dickinson_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi Jody,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Indeed, all the nodes are running the same version of Open MPI.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Perhaps I
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; was incorrect to describe the cluster as heterogeneous. In fact,  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; all
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; nodes run the same operating system (Scientific Linux 5.2), it's  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; only
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; hardware that's different and even then they're all i386 or  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; i686. I'm
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; also
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; attaching the output of ompi_info --all as I've seen it's  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; suggested in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mailing list instructions.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hugh
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi Hugh
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Just to make sure:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; You have installed Open-MPI on all your nodes?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Same version everywhere?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jody
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Tue, Apr 28, 2009 at 12:57 PM, Hugh Dickinson
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;h.j.dickinson_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; First of all let me make it perfectly clear that I'm a complete
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; beginner
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; as
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; far as MPI is concerned, so this may well be a trivial problem!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I've tried to set up Open MPI to use SSH to communicate between  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; nodes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; heterogeneous cluster. I've set up passwordless SSH and it seems  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; be
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; working fine. For example by hand I can do:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ssh nodename uptime
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and it returns the appropriate information for each node.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I then tried running a non-MPI program on all the nodes at the  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; same
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; time:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun -np 10 --hostfile hostfile uptime
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Where hostfile is a list of the 10 cluster node names with slots=1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; after
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; each one i.e
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; nodename1 slots=1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; nodename2 slots=2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; etc...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Nothing happens! The process just seems to hang. If I interrupt  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; process
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; with Ctrl-C I get:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun: killing job...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [gamma2.phyastcl.dur.ac.uk:18124] [0,0,0] ORTE_ERROR_LOG:  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Timeout in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; file
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; base/pls_base_orted_cmds.c at line 275
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [gamma2.phyastcl.dur.ac.uk:18124] [0,0,0] ORTE_ERROR_LOG:  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Timeout in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; file
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; pls_rsh_module.c at line 1166
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; WARNING: mpirun has exited before it received notification that  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; all
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; started processes had terminated.  You should double check and  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ensure
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that there are no runaway processes still executing.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If, instead of using the hostfile, I specify on the command line  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; host
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; from which I'm running mpirun, e.g.:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun -np 1 --host nodename uptime
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; then it works (i.e. if it doesn't need to communicate with other
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; nodes).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Do
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I need to tell Open MPI it should be using SSH to communicate?  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If so,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; how
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; do
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I do this? To be honest I think it's trying to do so, because  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; before
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; set
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; up passwordless SSH it challenged me for lots of passwords.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm running Open MPI 1.2.5 installed with Scientific Linux 5.2.  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Let
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; me
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; reiterate, it's very likely that I've done something stupid, so  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; all
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; suggestions are welcome.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hugh
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9139/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9140.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Previous message:</strong> <a href="9138.php">Brian Blank: "[OMPI users] Purify found bugs inside open-mpi library"</a>
<li><strong>In reply to:</strong> <a href="9137.php">Ralph Castain: "Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file"</a>
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
