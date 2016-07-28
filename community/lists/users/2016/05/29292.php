<?
$subject_val = "Re: [OMPI users] mpirun java";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 23 16:05:50 2016" -->
<!-- isoreceived="20160523200550" -->
<!-- sent="Mon, 23 May 2016 22:05:48 +0200" -->
<!-- isosent="20160523200548" -->
<!-- name="Claudio Stamile" -->
<!-- email="claudiostamile_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun java" -->
<!-- id="CAAdD79zhD29uaZv_16OYuWxbu9bKzh2STUNt=6-b1Lieb18ZkA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAF1Cqj7EXduGoVZLCtet+OJiMtMRWC4D1ELZ-C0mTGM8hAN+Qw_at_mail.gmail.com" -->
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
<strong>From:</strong> Claudio Stamile (<em>claudiostamile_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-23 16:05:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29293.php">Ralph Castain: "Re: [OMPI users] mpirun java"</a>
<li><strong>Previous message:</strong> <a href="29291.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem about mpirun on two nodes"</a>
<li><strong>In reply to:</strong> <a href="29288.php">Howard Pritchard: "Re: [OMPI users] mpirun java"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29293.php">Ralph Castain: "Re: [OMPI users] mpirun java"</a>
<li><strong>Reply:</strong> <a href="29293.php">Ralph Castain: "Re: [OMPI users] mpirun java"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Howard.
<br>
<p>Thank you for your reply.
<br>
<p>I'm using version 1.10.2
<br>
<p>I executed the following command:
<br>
<p>mpirun -np 2 --mca odls_base_verbose 100 java -cp alot:of:jarfile
<br>
-Djava.library.path=/Users/stamile/Applications/IBM/ILOG/CPLEX_Studio1263/cplex/bin/x86-64_osx
<br>
clustering.TensorClusterinCplexMPI
<br>
<p><p>the output is:
<br>
<p>* Num procs: 2 FirstRank: 0 Recovery: DEFAULT Max Restarts: 0*
<br>
<p>*  Argv[0]: java*
<br>
<p>*  Argv[1]: -cp*
<br>
<p>*  Argv[2]:
<br>
/Applications/Eclipse.app/Contents/MacOS:/Users/stamile/Documents/workspace_newJava/TensorFactorization/bin:/Users/stamile/Applications/IBM/ILOG/CPLEX_Studio1263/cplex/lib/cplex.jar:/Users/stamile/Downloads/commons-lang3-3.4/commons-lang3-3.4.jar:/Users/stamile/Downloads/Jama-1.0.3.jar:/Users/stamile/Downloads/hyperdrive-master/hyperdrive.jar:/usr/local/lib:/usr/local/lib/mpi.jar*
<br>
<p>*  Argv[3]:
<br>
/Users/stamile/Applications/IBM/ILOG/CPLEX_Studio1263/cplex/bin/x86-64_osx*
<br>
<p>*  Argv[4]:
<br>
-Djava.library.path=-Djava.library.path=/Users/stamile/Applications/IBM/ILOG/CPLEX_Studio1263/cplex/bin/x86-64_osx:/usr/local/lib*
<br>
<p>*  Argv[5]: clustering.TensorClusterinCplexMPI*
<br>
<p>*  Env[0]: OMPI_MCA_odls_base_verbose=100*
<br>
<p>*  Env[1]: OMPI_COMMAND=clustering.TensorClusterinCplexMPI*
<br>
<p>*  Env[2]:
<br>
OMPI_MCA_orte_precondition_transports=e6a8891c458c267b-c079810b4abe7ebf*
<br>
<p>*  Env[3]: OMPI_MCA_orte_peer_modex_id=0*
<br>
<p>*  Env[4]: OMPI_MCA_orte_peer_init_barrier_id=1*
<br>
<p>*  Env[5]: OMPI_MCA_orte_peer_fini_barrier_id=2*
<br>
<p>*  Env[6]: TMPDIR=/var/folders/5t/6tqp003x4fn09fzgtx46tjdh0000gn/T/*
<br>
<p><p>Argv[4] looks strange. Indeed if I execute:
<br>
<p>mpirun -np 2 --mca odls_base_verbose 100 java -cp alot:of:jarfile
<br>
clustering.TensorClusterinCplexMPI
<br>
The same as before without
<br>
( -Djava.library.path=/Users/stamile/Applications/IBM/ILOG/CPLEX_Studio1263/cplex/bin/x86-64_osx
<br>
)
<br>
i obtain:
<br>
<p>*Argv[0]: java*
<br>
<p>*  Argv[1]: -Djava.library.path=/usr/local/lib*
<br>
<p>*  Argv[2]: -cp*
<br>
<p>*  Argv[3]:
<br>
/Applications/Eclipse.app/Contents/MacOS:/Users/stamile/Documents/workspace_newJava/TensorFactorization/bin:/Users/stamile/Applications/IBM/ILOG/CPLEX_Studio1263/cplex/lib/cplex.jar:/Users/stamile/Downloads/commons-lang3-3.4/commons-lang3-3.4.jar:/Users/stamile/Downloads/Jama-1.0.3.jar:/Users/stamile/Downloads/hyperdrive-master/hyperdrive.jar:/usr/local/lib:/usr/local/lib/mpi.jar*
<br>
<p>*  Argv[4]: clustering.TensorClusterinCplexMPI*
<br>
<p>*  Env[0]: OMPI_MCA_odls_base_verbose=100*
<br>
<p>*  Env[1]: OMPI_COMMAND=clustering.TensorClusterinCplexMPI*
<br>
<p>*  Env[2]:
<br>
OMPI_MCA_orte_precondition_transports=92248561306f2b2e-601ae65dc34a347c*
<br>
<p>*  Env[3]: OMPI_MCA_orte_peer_modex_id=0*
<br>
<p>*  Env[4]: OMPI_MCA_orte_peer_init_barrier_id=1*
<br>
<p>*  Env[5]: OMPI_MCA_orte_peer_fini_barrier_id=2*
<br>
<p>*  Env[6]: TMPDIR=/var/folders/5t/6tqp003x4fn09fzgtx46tjdh0000gn/T/*
<br>
<p>*  Env[7]: __CF_USER_TEXT_ENCODING=0x1F5:0x0:0x4*
<br>
<p><p>What do you think ?
<br>
<p>Best,
<br>
<p>Claudio
<br>
<p>2016-05-23 19:38 GMT+02:00 Howard Pritchard &lt;hppritcha_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Hello Claudio,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun should be combining your java.library.path option with the one
</span><br>
<span class="quotelev1">&gt; needed to add
</span><br>
<span class="quotelev1">&gt; the Open MPI's java bindings as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Which version of Open MPI are you using?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you first try to compile the Ring.java code in ompi/examples and run
</span><br>
<span class="quotelev1">&gt; it with the
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
<span class="quotelev1">&gt; 2016-05-23 9:47 GMT-06:00 Claudio Stamile &lt;claudiostamile_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm using openmpi for Java.
</span><br>
<span class="quotelev2">&gt;&gt; I've a problem when I try to use more option parameters in my java
</span><br>
<span class="quotelev2">&gt;&gt; command. More in detail I run mpirun as follow:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -n 5 java -cp path1:path2 -Djava.library.path=pathLibs
</span><br>
<span class="quotelev2">&gt;&gt; classification.MyClass
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It seems that the option &quot;-Djava.library.path&quot; is ignored when i execute
</span><br>
<span class="quotelev2">&gt;&gt; the command.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is it normal ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Do you know how to solve this problem ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best,
</span><br>
<span class="quotelev2">&gt;&gt; Claudio
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; C.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29285.php">http://www.open-mpi.org/community/lists/users/2016/05/29285.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29288.php">http://www.open-mpi.org/community/lists/users/2016/05/29288.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
C.
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29292/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29293.php">Ralph Castain: "Re: [OMPI users] mpirun java"</a>
<li><strong>Previous message:</strong> <a href="29291.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem about mpirun on two nodes"</a>
<li><strong>In reply to:</strong> <a href="29288.php">Howard Pritchard: "Re: [OMPI users] mpirun java"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29293.php">Ralph Castain: "Re: [OMPI users] mpirun java"</a>
<li><strong>Reply:</strong> <a href="29293.php">Ralph Castain: "Re: [OMPI users] mpirun java"</a>
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
