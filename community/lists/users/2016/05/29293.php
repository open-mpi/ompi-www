<?
$subject_val = "Re: [OMPI users] mpirun java";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 23 16:59:48 2016" -->
<!-- isoreceived="20160523205948" -->
<!-- sent="Mon, 23 May 2016 13:59:34 -0700" -->
<!-- isosent="20160523205934" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun java" -->
<!-- id="C128FA6B-3715-43F5-AA35-640C62064912_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAdD79zhD29uaZv_16OYuWxbu9bKzh2STUNt=6-b1Lieb18ZkA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun java<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-23 16:59:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29294.php">Howard Pritchard: "Re: [OMPI users] mpirun java"</a>
<li><strong>Previous message:</strong> <a href="29292.php">Claudio Stamile: "Re: [OMPI users] mpirun java"</a>
<li><strong>In reply to:</strong> <a href="29292.php">Claudio Stamile: "Re: [OMPI users] mpirun java"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29294.php">Howard Pritchard: "Re: [OMPI users] mpirun java"</a>
<li><strong>Reply:</strong> <a href="29294.php">Howard Pritchard: "Re: [OMPI users] mpirun java"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looks to me like there is a bug in the orterun parser that is trying to add java library paths - I can take a look at it
<br>
<p><span class="quotelev1">&gt; On May 23, 2016, at 1:05 PM, Claudio Stamile &lt;claudiostamile_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Howard.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you for your reply.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm using version 1.10.2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I executed the following command:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 --mca odls_base_verbose 100 java -cp alot:of:jarfile -Djava.library.path=/Users/stamile/Applications/IBM/ILOG/CPLEX_Studio1263/cplex/bin/x86-64_osx clustering.TensorClusterinCplexMPI
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the output is:
</span><br>
<span class="quotelev1">&gt; Num procs: 2	FirstRank: 0	Recovery: DEFAULT	Max Restarts: 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  	Argv[0]: java
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  	Argv[1]: -cp
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  	Argv[2]: /Applications/Eclipse.app/Contents/MacOS:/Users/stamile/Documents/workspace_newJava/TensorFactorization/bin:/Users/stamile/Applications/IBM/ILOG/CPLEX_Studio1263/cplex/lib/cplex.jar:/Users/stamile/Downloads/commons-lang3-3.4/commons-lang3-3.4.jar:/Users/stamile/Downloads/Jama-1.0.3.jar:/Users/stamile/Downloads/hyperdrive-master/hyperdrive.jar:/usr/local/lib:/usr/local/lib/mpi.jar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  	Argv[3]: /Users/stamile/Applications/IBM/ILOG/CPLEX_Studio1263/cplex/bin/x86-64_osx
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  	Argv[4]: -Djava.library.path=-Djava.library.path=/Users/stamile/Applications/IBM/ILOG/CPLEX_Studio1263/cplex/bin/x86-64_osx:/usr/local/lib
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  	Argv[5]: clustering.TensorClusterinCplexMPI
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  	Env[0]: OMPI_MCA_odls_base_verbose=100
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  	Env[1]: OMPI_COMMAND=clustering.TensorClusterinCplexMPI
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  	Env[2]: OMPI_MCA_orte_precondition_transports=e6a8891c458c267b-c079810b4abe7ebf
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  	Env[3]: OMPI_MCA_orte_peer_modex_id=0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  	Env[4]: OMPI_MCA_orte_peer_init_barrier_id=1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  	Env[5]: OMPI_MCA_orte_peer_fini_barrier_id=2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  	Env[6]: TMPDIR=/var/folders/5t/6tqp003x4fn09fzgtx46tjdh0000gn/T/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Argv[4] looks strange. Indeed if I execute:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 --mca odls_base_verbose 100 java -cp alot:of:jarfile clustering.TensorClusterinCplexMPI
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The same as before without ( -Djava.library.path=/Users/stamile/Applications/IBM/ILOG/CPLEX_Studio1263/cplex/bin/x86-64_osx ) i obtain:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Argv[0]: java
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  	Argv[1]: -Djava.library.path=/usr/local/lib
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  	Argv[2]: -cp
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  	Argv[3]: /Applications/Eclipse.app/Contents/MacOS:/Users/stamile/Documents/workspace_newJava/TensorFactorization/bin:/Users/stamile/Applications/IBM/ILOG/CPLEX_Studio1263/cplex/lib/cplex.jar:/Users/stamile/Downloads/commons-lang3-3.4/commons-lang3-3.4.jar:/Users/stamile/Downloads/Jama-1.0.3.jar:/Users/stamile/Downloads/hyperdrive-master/hyperdrive.jar:/usr/local/lib:/usr/local/lib/mpi.jar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  	Argv[4]: clustering.TensorClusterinCplexMPI
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  	Env[0]: OMPI_MCA_odls_base_verbose=100
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  	Env[1]: OMPI_COMMAND=clustering.TensorClusterinCplexMPI
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  	Env[2]: OMPI_MCA_orte_precondition_transports=92248561306f2b2e-601ae65dc34a347c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  	Env[3]: OMPI_MCA_orte_peer_modex_id=0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  	Env[4]: OMPI_MCA_orte_peer_init_barrier_id=1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  	Env[5]: OMPI_MCA_orte_peer_fini_barrier_id=2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  	Env[6]: TMPDIR=/var/folders/5t/6tqp003x4fn09fzgtx46tjdh0000gn/T/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  	Env[7]: __CF_USER_TEXT_ENCODING=0x1F5:0x0:0x4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What do you think ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Claudio
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2016-05-23 19:38 GMT+02:00 Howard Pritchard &lt;hppritcha_at_[hidden] &lt;mailto:hppritcha_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev1">&gt; Hello Claudio,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun should be combining your java.library.path option with the one needed to add
</span><br>
<span class="quotelev1">&gt; the Open MPI's java bindings as well.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Which version of Open MPI are you using?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could you first try to compile the Ring.java code in ompi/examples and run it with the
</span><br>
<span class="quotelev1">&gt; following additional mpirun parameter?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -np 1 --mca odls_base_verbose 100 java Ring
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; then try your application with the same &quot;odls_base_verbose&quot; mpirun option
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and post the output from the two runs to the mail list?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I suspect there may be a bug with building the combined java.library.path
</span><br>
<span class="quotelev1">&gt; in the Open MPI code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2016-05-23 9:47 GMT-06:00 Claudio Stamile &lt;claudiostamile_at_[hidden] &lt;mailto:claudiostamile_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm using openmpi for Java.
</span><br>
<span class="quotelev1">&gt; I've a problem when I try to use more option parameters in my java command. More in detail I run mpirun as follow:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -n 5 java -cp path1:path2 -Djava.library.path=pathLibs classification.MyClass
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems that the option &quot;-Djava.library.path&quot; is ignored when i execute the command.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is it normal ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you know how to solve this problem ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; Claudio
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; C.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29285.php">http://www.open-mpi.org/community/lists/users/2016/05/29285.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/05/29285.php">http://www.open-mpi.org/community/lists/users/2016/05/29285.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29288.php">http://www.open-mpi.org/community/lists/users/2016/05/29288.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/05/29288.php">http://www.open-mpi.org/community/lists/users/2016/05/29288.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; C.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29292.php">http://www.open-mpi.org/community/lists/users/2016/05/29292.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29293/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29294.php">Howard Pritchard: "Re: [OMPI users] mpirun java"</a>
<li><strong>Previous message:</strong> <a href="29292.php">Claudio Stamile: "Re: [OMPI users] mpirun java"</a>
<li><strong>In reply to:</strong> <a href="29292.php">Claudio Stamile: "Re: [OMPI users] mpirun java"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29294.php">Howard Pritchard: "Re: [OMPI users] mpirun java"</a>
<li><strong>Reply:</strong> <a href="29294.php">Howard Pritchard: "Re: [OMPI users] mpirun java"</a>
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
