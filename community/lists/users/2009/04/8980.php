<?
$subject_val = "Re: [OMPI users] Problem with running openMPI program";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 20 10:06:59 2009" -->
<!-- isoreceived="20090420140659" -->
<!-- sent="Mon, 20 Apr 2009 10:06:50 -0400" -->
<!-- isosent="20090420140650" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with running openMPI program" -->
<!-- id="49EC817A.5010803_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="a599d60e0904180159t61f6cfe7t978415fe22207e2c_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with running openMPI program<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-20 10:06:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8981.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Previous message:</strong> <a href="8979.php">Lenny Verkhovsky: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>In reply to:</strong> <a href="8970.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8981.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Reply:</strong> <a href="8981.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ankush
<br>
<p>Please read the FAQ I sent you in the previous message.
<br>
That is the answer to your repeated question.
<br>
OpenMPI (and all MPIs that I know of) requires passwordless connections.
<br>
Your program fails because you didn't setup that.
<br>
<p>If it worked with a single compute node,
<br>
that was most likely fortuitous,
<br>
not by design.
<br>
What you see on the screen are the ssh password messages
<br>
from your two compute nodes,
<br>
but OpenMPI (or any MPI)
<br>
won't wait for your typing passwords.
<br>
Imagine if you were running your program on 1000 nodes ...,
<br>
and,say, running the program 1000 times ...
<br>
would you really like to type all those one million passwords?
<br>
The design must be scalable.
<br>
<p>Here is one recipe for passwordless ssh on clusters:
<br>
<p><a href="http://agenda.clustermonkey.net/index.php/Passwordless_SSH_Logins">http://agenda.clustermonkey.net/index.php/Passwordless_SSH_Logins</a>
<br>
<a href="http://agenda.clustermonkey.net/index.php/Passwordless_SSH_(and_RSH">http://agenda.clustermonkey.net/index.php/Passwordless_SSH_(and_RSH</a>)_Logins
<br>
<p>Read it carefully,
<br>
the comments about MPI(ch) 1.2 and PVM are somewhat out of date,
<br>
however, the ssh recipe is fine, detailed, and clear.
<br>
Note also the nuanced difference for NFS mounted home directories
<br>
versus separate home directories on each node.
<br>
<p>Pay a visit to OpenSSH site also, for more information:
<br>
<a href="http://www.openssh.com/">http://www.openssh.com/</a>
<br>
<a href="http://en.wikipedia.org/wiki/OpenSSH">http://en.wikipedia.org/wiki/OpenSSH</a>
<br>
<p>Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<p>Anush Kaul wrote:
<br>
<span class="quotelev1">&gt; Let me explain in detail,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; when we had only 2 nodes, 1 master (192.168.67.18) + 1 compute node 
</span><br>
<span class="quotelev1">&gt; (192.168.45.65)
</span><br>
<span class="quotelev1">&gt; my openmpi-default-hostfile looked like/
</span><br>
<span class="quotelev1">&gt; 192.168.67.18 slots=2
</span><br>
<span class="quotelev1">&gt; 192.168.45.65 slots=2/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; after this on running the command *miprun /work/Pi* on master node we got
</span><br>
<span class="quotelev1">&gt; /
</span><br>
<span class="quotelev1">&gt; # root_at_192.168.45.65 &lt;mailto:root_at_192.168.45.65&gt; password :/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; after entering the password the program ran on both de nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now after connecting a second compute node, and editing the hostfile:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /192.168.67.18 slots=2
</span><br>
<span class="quotelev1">&gt; 192.168.45.65 slots=2/
</span><br>
<span class="quotelev1">&gt; /192.168.67.241 slots=2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /and then running the command *miprun /work/Pi* on master node we got
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # root_at_192.168.45.65 &lt;mailto:root_at_192.168.45.65&gt;'s password: 
</span><br>
<span class="quotelev1">&gt; root_at_192.168.67.241 &lt;mailto:root_at_192.168.67.241&gt;'s password:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; which does not accept the password.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Although we are trying to implement the passwordless cluster. i wud like 
</span><br>
<span class="quotelev1">&gt; to know what this problem is occuring?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sat, Apr 18, 2009 at 3:40 AM, Gus Correa &lt;gus_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:gus_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Ankush
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     You need to setup passwordless connections with ssh to the node you just
</span><br>
<span class="quotelev1">&gt;     added.  You (or somebody else) probably did this already on the
</span><br>
<span class="quotelev1">&gt;     first compute node, otherwise the MPI programs wouldn't run
</span><br>
<span class="quotelev1">&gt;     across the network.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     See the very last sentence on this FAQ:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/faq/?category=running#run-prereqs">http://www.open-mpi.org/faq/?category=running#run-prereqs</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     And try this recipe (if you use RSA keys instead of DSA, replace all
</span><br>
<span class="quotelev1">&gt;     &quot;dsa&quot; by &quot;rsa&quot;):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.sshkeychain.org/mirrors/SSH-with-Keys-HOWTO/SSH-with-Keys-HOWTO-4.html#ss4.3">http://www.sshkeychain.org/mirrors/SSH-with-Keys-HOWTO/SSH-with-Keys-HOWTO-4.html#ss4.3</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     I hope this helps.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Gus Correa
</span><br>
<span class="quotelev1">&gt;     ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;     Gustavo Correa
</span><br>
<span class="quotelev1">&gt;     Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev1">&gt;     Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev1">&gt;     ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Ankush Kaul wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         Thank you, i m reading up on de tools u suggested.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         I am facing another problem, my cluster is working fine with 2
</span><br>
<span class="quotelev1">&gt;         hosts (1 master + 1 compute node) but when i tried 2 add another
</span><br>
<span class="quotelev1">&gt;         node (1 master + 2 compute node) its not working. it works fine
</span><br>
<span class="quotelev1">&gt;         when i give de command mpirun -host &lt;hostname&gt; /work/Pi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         but when i try to run
</span><br>
<span class="quotelev1">&gt;         mpirun  /work/Pi it gives following error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         root_at_192.168.45.65 &lt;mailto:root_at_192.168.45.65&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:root_at_192.168.45.65 &lt;mailto:root_at_192.168.45.65&gt;&gt;'s
</span><br>
<span class="quotelev1">&gt;         password: root_at_192.168.67.241 &lt;mailto:root_at_192.168.67.241&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:root_at_192.168.67.241 &lt;mailto:root_at_192.168.67.241&gt;&gt;'s
</span><br>
<span class="quotelev1">&gt;         password:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         Permission denied, please try again. &lt;The password i provide is
</span><br>
<span class="quotelev1">&gt;         correct&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         root_at_192.168.45.65 &lt;mailto:root_at_192.168.45.65&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:root_at_192.168.45.65 &lt;mailto:root_at_192.168.45.65&gt;&gt;'s password:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         Permission denied, please try again.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         root_at_192.168.45.65 &lt;mailto:root_at_192.168.45.65&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:root_at_192.168.45.65 &lt;mailto:root_at_192.168.45.65&gt;&gt;'s password:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         Permission denied (publickey,gssapi-with-mic,password).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          
</span><br>
<span class="quotelev1">&gt;         Permission denied, please try again.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         root_at_192.168.67.241 &lt;mailto:root_at_192.168.67.241&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:root_at_192.168.67.241 &lt;mailto:root_at_192.168.67.241&gt;&gt;'s
</span><br>
<span class="quotelev1">&gt;         password: [ccomp1.cluster:03503] [0,0,0] ORTE_ERROR_LOG: Timeout
</span><br>
<span class="quotelev1">&gt;         in file base/pls_base_orted_cmds.c at line 275
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         [ccomp1.cluster:03503] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev1">&gt;         pls_rsh_module.c at line 1166
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         [ccomp1.cluster:03503] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev1">&gt;         errmgr_hnp.c at line 90
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         [ccomp1.cluster:03503] ERROR: A daemon on node 192.168.45.65
</span><br>
<span class="quotelev1">&gt;         failed to start as expected.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         [ccomp1.cluster:03503] ERROR: There may be more information
</span><br>
<span class="quotelev1">&gt;         available from
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         [ccomp1.cluster:03503] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         [ccomp1.cluster:03503] ERROR: The daemon exited unexpectedly
</span><br>
<span class="quotelev1">&gt;         with status 255.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         [ccomp1.cluster:03503] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev1">&gt;         base/pls_base_orted_cmds.c at line 188
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         [ccomp1.cluster:03503] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev1">&gt;         pls_rsh_module.c at line 1198
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         What is the problem here?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         mpirun was unable to cleanly terminate the daemons for this job.
</span><br>
<span class="quotelev1">&gt;         Returned value Timeout instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         On Tue, Apr 14, 2009 at 7:15 PM, Eugene Loh &lt;Eugene.Loh_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:Eugene.Loh_at_[hidden]&gt; &lt;mailto:Eugene.Loh_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:Eugene.Loh_at_[hidden]&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            Ankush Kaul wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                Finally, after mentioning the hostfiles the cluster is
</span><br>
<span class="quotelev1">&gt;         working
</span><br>
<span class="quotelev1">&gt;                fine. We downloaded few benchmarking softwares but i
</span><br>
<span class="quotelev1">&gt;         would like
</span><br>
<span class="quotelev1">&gt;                to know if there is any GUI based benchmarking software
</span><br>
<span class="quotelev1">&gt;         so that
</span><br>
<span class="quotelev1">&gt;                its easier to demonstrate the working of our cluster while
</span><br>
<span class="quotelev1">&gt;                displaying our cluster.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            I'm confused what you're looking for here, but thought I'd
</span><br>
<span class="quotelev1">&gt;         venture a
</span><br>
<span class="quotelev1">&gt;            suggestion.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            There are GUI-based performance analysis and tracing tools.
</span><br>
<span class="quotelev1">&gt;          E.g.,
</span><br>
<span class="quotelev1">&gt;            run a program, [[semi-]automatically] collect performance
</span><br>
<span class="quotelev1">&gt;         data, run
</span><br>
<span class="quotelev1">&gt;            a GUI-based analysis tool on the data, visualize what happened on
</span><br>
<span class="quotelev1">&gt;            your cluster.  Would this suit your purposes?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            If so, there are a variety of tools out there you could try.
</span><br>
<span class="quotelev1">&gt;          Some
</span><br>
<span class="quotelev1">&gt;            are platform-specific or cost money.  Some are widely/freely
</span><br>
<span class="quotelev1">&gt;            available.  Examples of these tools include Intel Trace Analyzer,
</span><br>
<span class="quotelev1">&gt;            Jumpshot, Vampir, TAU, etc.  I do know that Sun Studio
</span><br>
<span class="quotelev1">&gt;         (Performance
</span><br>
<span class="quotelev1">&gt;            Analyzer) is available via free download on x86 and SPARC and
</span><br>
<span class="quotelev1">&gt;         Linux
</span><br>
<span class="quotelev1">&gt;            and Solaris and works with OMPI.  Possibly the same with
</span><br>
<span class="quotelev1">&gt;         Jumpshot.
</span><br>
<span class="quotelev1">&gt;             VampirTrace instrumentation is already in OMPI, but then you
</span><br>
<span class="quotelev1">&gt;         need
</span><br>
<span class="quotelev1">&gt;            to figure out the analysis-tool part.  (I think the Vampir
</span><br>
<span class="quotelev1">&gt;         GUI tool
</span><br>
<span class="quotelev1">&gt;            requires a license, but I'm not sure.  Maybe you can convert
</span><br>
<span class="quotelev1">&gt;         to TAU,
</span><br>
<span class="quotelev1">&gt;            which is probably available for free download.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            Anyhow, I don't even know if that sort of thing fits your
</span><br>
<span class="quotelev1">&gt;            requirements.  Just an idea.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            _______________________________________________
</span><br>
<span class="quotelev1">&gt;            users mailing list
</span><br>
<span class="quotelev1">&gt;            users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         _______________________________________________
</span><br>
<span class="quotelev1">&gt;         users mailing list
</span><br>
<span class="quotelev1">&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="8981.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Previous message:</strong> <a href="8979.php">Lenny Verkhovsky: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>In reply to:</strong> <a href="8970.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8981.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Reply:</strong> <a href="8981.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
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
