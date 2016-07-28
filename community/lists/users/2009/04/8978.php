<?
$subject_val = "Re: [OMPI users] Problem with running openMPI program";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 20 09:27:38 2009" -->
<!-- isoreceived="20090420132738" -->
<!-- sent="Mon, 20 Apr 2009 09:27:22 -0400" -->
<!-- isosent="20090420132722" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with running openMPI program" -->
<!-- id="49EC783A.90800_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="a599d60e0904190326p44219f52t8021a2f414a4c1ff_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-04-20 09:27:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8979.php">Lenny Verkhovsky: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Previous message:</strong> <a href="8977.php">Geoffroy Pignot: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>In reply to:</strong> <a href="8972.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8980.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ankush
<br>
<p>Ankush Kaul wrote:
<br>
<span class="quotelev1">&gt; Also how can i find out where are my mpi libraries and include directories?
</span><br>
<p>If you configured OpenMPI with --prefix=/some/dir they are
<br>
in /some/dir/lib and /some/dir/include,
<br>
whereas the executables (mpicc, mpiexec, etc) are in /some/dir/bin.
<br>
Otherwise OpenMPI defaults to /usr/local.
<br>
<p>However, the preferred way to compile OpenMPI programs is to use the
<br>
OpenMPI wrappers (e.g. mpicc), and in this case you don't need to
<br>
specify the lib and include directories at all.
<br>
<p>If you have many MPI flavors in your computers, use full path names
<br>
to avoid confusion (or carefully set the OpenMPI bin path ahead of any 
<br>
other).
<br>
<p>The Linux command &quot;locate&quot; helps find things (e.g. &quot;locate mpi.h&quot;).
<br>
You may need to update the location database
<br>
before using it with &quot;updatedb&quot;.
<br>
<p>I hope this helps.
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
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sat, Apr 18, 2009 at 2:29 PM, Ankush Kaul &lt;ankush.rkaul_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:ankush.rkaul_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Let me explain in detail,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     when we had only 2 nodes, 1 master (192.168.67.18) + 1 compute node
</span><br>
<span class="quotelev1">&gt;     (192.168.45.65)
</span><br>
<span class="quotelev1">&gt;     my openmpi-default-hostfile looked like/
</span><br>
<span class="quotelev1">&gt;     192.168.67.18 slots=2
</span><br>
<span class="quotelev1">&gt;     192.168.45.65 slots=2/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     after this on running the command *miprun /work/Pi* on master node
</span><br>
<span class="quotelev1">&gt;     we got
</span><br>
<span class="quotelev1">&gt;     /
</span><br>
<span class="quotelev1">&gt;     # root_at_192.168.45.65 &lt;mailto:root_at_192.168.45.65&gt; password :/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     after entering the password the program ran on both de nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Now after connecting a second compute node, and editing the hostfile:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /192.168.67.18 slots=2
</span><br>
<span class="quotelev1">&gt;     192.168.45.65 slots=2/
</span><br>
<span class="quotelev1">&gt;     /192.168.67.241 slots=2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /and then running the command *miprun /work/Pi* on master node we got
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     # root_at_192.168.45.65 &lt;mailto:root_at_192.168.45.65&gt;'s password:
</span><br>
<span class="quotelev1">&gt;     root_at_192.168.67.241 &lt;mailto:root_at_192.168.67.241&gt;'s password:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     which does not accept the password.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Although we are trying to implement the passwordless cluster. i wud
</span><br>
<span class="quotelev1">&gt;     like to know what this problem is occuring?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     On Sat, Apr 18, 2009 at 3:40 AM, Gus Correa &lt;gus_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:gus_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         Ankush
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         You need to setup passwordless connections with ssh to the node
</span><br>
<span class="quotelev1">&gt;         you just
</span><br>
<span class="quotelev1">&gt;         added.  You (or somebody else) probably did this already on the
</span><br>
<span class="quotelev1">&gt;         first compute node, otherwise the MPI programs wouldn't run
</span><br>
<span class="quotelev1">&gt;         across the network.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         See the very last sentence on this FAQ:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/faq/?category=running#run-prereqs">http://www.open-mpi.org/faq/?category=running#run-prereqs</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         And try this recipe (if you use RSA keys instead of DSA, replace
</span><br>
<span class="quotelev1">&gt;         all &quot;dsa&quot; by &quot;rsa&quot;):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.sshkeychain.org/mirrors/SSH-with-Keys-HOWTO/SSH-with-Keys-HOWTO-4.html#ss4.3">http://www.sshkeychain.org/mirrors/SSH-with-Keys-HOWTO/SSH-with-Keys-HOWTO-4.html#ss4.3</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         I hope this helps.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         Gus Correa
</span><br>
<span class="quotelev1">&gt;         ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;         Gustavo Correa
</span><br>
<span class="quotelev1">&gt;         Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev1">&gt;         Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev1">&gt;         ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         Ankush Kaul wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             Thank you, i m reading up on de tools u suggested.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             I am facing another problem, my cluster is working fine with
</span><br>
<span class="quotelev1">&gt;             2 hosts (1 master + 1 compute node) but when i tried 2 add
</span><br>
<span class="quotelev1">&gt;             another node (1 master + 2 compute node) its not working. it
</span><br>
<span class="quotelev1">&gt;             works fine when i give de command mpirun -host &lt;hostname&gt;
</span><br>
<span class="quotelev1">&gt;             /work/Pi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             but when i try to run
</span><br>
<span class="quotelev1">&gt;             mpirun  /work/Pi it gives following error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             root_at_192.168.45.65 &lt;mailto:root_at_192.168.45.65&gt;
</span><br>
<span class="quotelev1">&gt;             &lt;mailto:root_at_192.168.45.65 &lt;mailto:root_at_192.168.45.65&gt;&gt;'s
</span><br>
<span class="quotelev1">&gt;             password: root_at_192.168.67.241 &lt;mailto:root_at_192.168.67.241&gt;
</span><br>
<span class="quotelev1">&gt;             &lt;mailto:root_at_192.168.67.241 &lt;mailto:root_at_192.168.67.241&gt;&gt;'s
</span><br>
<span class="quotelev1">&gt;             password:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             Permission denied, please try again. &lt;The password i provide
</span><br>
<span class="quotelev1">&gt;             is correct&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             root_at_192.168.45.65 &lt;mailto:root_at_192.168.45.65&gt;
</span><br>
<span class="quotelev1">&gt;             &lt;mailto:root_at_192.168.45.65 &lt;mailto:root_at_192.168.45.65&gt;&gt;'s
</span><br>
<span class="quotelev1">&gt;             password:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             Permission denied, please try again.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             root_at_192.168.45.65 &lt;mailto:root_at_192.168.45.65&gt;
</span><br>
<span class="quotelev1">&gt;             &lt;mailto:root_at_192.168.45.65 &lt;mailto:root_at_192.168.45.65&gt;&gt;'s
</span><br>
<span class="quotelev1">&gt;             password:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             Permission denied (publickey,gssapi-with-mic,password).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;              
</span><br>
<span class="quotelev1">&gt;             Permission denied, please try again.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             root_at_192.168.67.241 &lt;mailto:root_at_192.168.67.241&gt;
</span><br>
<span class="quotelev1">&gt;             &lt;mailto:root_at_192.168.67.241 &lt;mailto:root_at_192.168.67.241&gt;&gt;'s
</span><br>
<span class="quotelev1">&gt;             password: [ccomp1.cluster:03503] [0,0,0] ORTE_ERROR_LOG:
</span><br>
<span class="quotelev1">&gt;             Timeout in file base/pls_base_orted_cmds.c at line 275
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             [ccomp1.cluster:03503] [0,0,0] ORTE_ERROR_LOG: Timeout in
</span><br>
<span class="quotelev1">&gt;             file pls_rsh_module.c at line 1166
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             [ccomp1.cluster:03503] [0,0,0] ORTE_ERROR_LOG: Timeout in
</span><br>
<span class="quotelev1">&gt;             file errmgr_hnp.c at line 90
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             [ccomp1.cluster:03503] ERROR: A daemon on node 192.168.45.65
</span><br>
<span class="quotelev1">&gt;             failed to start as expected.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             [ccomp1.cluster:03503] ERROR: There may be more information
</span><br>
<span class="quotelev1">&gt;             available from
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             [ccomp1.cluster:03503] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             [ccomp1.cluster:03503] ERROR: The daemon exited unexpectedly
</span><br>
<span class="quotelev1">&gt;             with status 255.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             [ccomp1.cluster:03503] [0,0,0] ORTE_ERROR_LOG: Timeout in
</span><br>
<span class="quotelev1">&gt;             file base/pls_base_orted_cmds.c at line 188
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             [ccomp1.cluster:03503] [0,0,0] ORTE_ERROR_LOG: Timeout in
</span><br>
<span class="quotelev1">&gt;             file pls_rsh_module.c at line 1198
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             What is the problem here?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             mpirun was unable to cleanly terminate the daemons for this
</span><br>
<span class="quotelev1">&gt;             job. Returned value Timeout instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             On Tue, Apr 14, 2009 at 7:15 PM, Eugene Loh
</span><br>
<span class="quotelev1">&gt;             &lt;Eugene.Loh_at_[hidden] &lt;mailto:Eugene.Loh_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;             &lt;mailto:Eugene.Loh_at_[hidden] &lt;mailto:Eugene.Loh_at_[hidden]&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                Ankush Kaul wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                    Finally, after mentioning the hostfiles the cluster
</span><br>
<span class="quotelev1">&gt;             is working
</span><br>
<span class="quotelev1">&gt;                    fine. We downloaded few benchmarking softwares but i
</span><br>
<span class="quotelev1">&gt;             would like
</span><br>
<span class="quotelev1">&gt;                    to know if there is any GUI based benchmarking
</span><br>
<span class="quotelev1">&gt;             software so that
</span><br>
<span class="quotelev1">&gt;                    its easier to demonstrate the working of our cluster
</span><br>
<span class="quotelev1">&gt;             while
</span><br>
<span class="quotelev1">&gt;                    displaying our cluster.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                I'm confused what you're looking for here, but thought
</span><br>
<span class="quotelev1">&gt;             I'd venture a
</span><br>
<span class="quotelev1">&gt;                suggestion.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                There are GUI-based performance analysis and tracing
</span><br>
<span class="quotelev1">&gt;             tools.  E.g.,
</span><br>
<span class="quotelev1">&gt;                run a program, [[semi-]automatically] collect performance
</span><br>
<span class="quotelev1">&gt;             data, run
</span><br>
<span class="quotelev1">&gt;                a GUI-based analysis tool on the data, visualize what
</span><br>
<span class="quotelev1">&gt;             happened on
</span><br>
<span class="quotelev1">&gt;                your cluster.  Would this suit your purposes?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                If so, there are a variety of tools out there you could
</span><br>
<span class="quotelev1">&gt;             try.  Some
</span><br>
<span class="quotelev1">&gt;                are platform-specific or cost money.  Some are widely/freely
</span><br>
<span class="quotelev1">&gt;                available.  Examples of these tools include Intel Trace
</span><br>
<span class="quotelev1">&gt;             Analyzer,
</span><br>
<span class="quotelev1">&gt;                Jumpshot, Vampir, TAU, etc.  I do know that Sun Studio
</span><br>
<span class="quotelev1">&gt;             (Performance
</span><br>
<span class="quotelev1">&gt;                Analyzer) is available via free download on x86 and SPARC
</span><br>
<span class="quotelev1">&gt;             and Linux
</span><br>
<span class="quotelev1">&gt;                and Solaris and works with OMPI.  Possibly the same with
</span><br>
<span class="quotelev1">&gt;             Jumpshot.
</span><br>
<span class="quotelev1">&gt;                 VampirTrace instrumentation is already in OMPI, but then
</span><br>
<span class="quotelev1">&gt;             you need
</span><br>
<span class="quotelev1">&gt;                to figure out the analysis-tool part.  (I think the
</span><br>
<span class="quotelev1">&gt;             Vampir GUI tool
</span><br>
<span class="quotelev1">&gt;                requires a license, but I'm not sure.  Maybe you can
</span><br>
<span class="quotelev1">&gt;             convert to TAU,
</span><br>
<span class="quotelev1">&gt;                which is probably available for free download.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                Anyhow, I don't even know if that sort of thing fits your
</span><br>
<span class="quotelev1">&gt;                requirements.  Just an idea.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                _______________________________________________
</span><br>
<span class="quotelev1">&gt;                users mailing list
</span><br>
<span class="quotelev1">&gt;                users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;             &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             _______________________________________________
</span><br>
<span class="quotelev1">&gt;             users mailing list
</span><br>
<span class="quotelev1">&gt;             users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="8979.php">Lenny Verkhovsky: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Previous message:</strong> <a href="8977.php">Geoffroy Pignot: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>In reply to:</strong> <a href="8972.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8980.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
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
