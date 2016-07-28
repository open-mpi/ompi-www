<?
$subject_val = "Re: [OMPI users] mpirun java";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 23 17:04:25 2016" -->
<!-- isoreceived="20160523210425" -->
<!-- sent="Mon, 23 May 2016 15:04:23 -0600" -->
<!-- isosent="20160523210423" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun java" -->
<!-- id="CAF1Cqj765fhchq=-eNJeZcFMqssFb-dqP9z6orrsNEAfjAETuQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="C128FA6B-3715-43F5-AA35-640C62064912_at_open-mpi.org" -->
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
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-23 17:04:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29295.php">Megdich Islem: "Re: [OMPI users] users Digest, Vol 3510, Issue 2"</a>
<li><strong>Previous message:</strong> <a href="29293.php">Ralph Castain: "Re: [OMPI users] mpirun java"</a>
<li><strong>In reply to:</strong> <a href="29293.php">Ralph Castain: "Re: [OMPI users] mpirun java"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
HI Ralph,
<br>
<p>Yep, If you could handle this that would be great.  I guess we'd like a fix
<br>
in 1.10.x and for 2.0.1
<br>
that would be great.
<br>
<p>Howard
<br>
<p><p>2016-05-23 14:59 GMT-06:00 Ralph Castain &lt;rhc_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Looks to me like there is a bug in the orterun parser that is trying to
</span><br>
<span class="quotelev1">&gt; add java library paths - I can take a look at it
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 23, 2016, at 1:05 PM, Claudio Stamile &lt;claudiostamile_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
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
<span class="quotelev1">&gt; mpirun -np 2 --mca odls_base_verbose 100 java -cp alot:of:jarfile
</span><br>
<span class="quotelev1">&gt; -Djava.library.path=/Users/stamile/Applications/IBM/ILOG/CPLEX_Studio1263/cplex/bin/x86-64_osx
</span><br>
<span class="quotelev1">&gt; clustering.TensorClusterinCplexMPI
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the output is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * Num procs: 2 FirstRank: 0 Recovery: DEFAULT Max Restarts: 0*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *  Argv[0]: java*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *  Argv[1]: -cp*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *  Argv[2]:
</span><br>
<span class="quotelev1">&gt; /Applications/Eclipse.app/Contents/MacOS:/Users/stamile/Documents/workspace_newJava/TensorFactorization/bin:/Users/stamile/Applications/IBM/ILOG/CPLEX_Studio1263/cplex/lib/cplex.jar:/Users/stamile/Downloads/commons-lang3-3.4/commons-lang3-3.4.jar:/Users/stamile/Downloads/Jama-1.0.3.jar:/Users/stamile/Downloads/hyperdrive-master/hyperdrive.jar:/usr/local/lib:/usr/local/lib/mpi.jar*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *  Argv[3]:
</span><br>
<span class="quotelev1">&gt; /Users/stamile/Applications/IBM/ILOG/CPLEX_Studio1263/cplex/bin/x86-64_osx*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *  Argv[4]:
</span><br>
<span class="quotelev1">&gt; -Djava.library.path=-Djava.library.path=/Users/stamile/Applications/IBM/ILOG/CPLEX_Studio1263/cplex/bin/x86-64_osx:/usr/local/lib*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *  Argv[5]: clustering.TensorClusterinCplexMPI*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *  Env[0]: OMPI_MCA_odls_base_verbose=100*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *  Env[1]: OMPI_COMMAND=clustering.TensorClusterinCplexMPI*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *  Env[2]:
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_orte_precondition_transports=e6a8891c458c267b-c079810b4abe7ebf*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *  Env[3]: OMPI_MCA_orte_peer_modex_id=0*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *  Env[4]: OMPI_MCA_orte_peer_init_barrier_id=1*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *  Env[5]: OMPI_MCA_orte_peer_fini_barrier_id=2*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *  Env[6]: TMPDIR=/var/folders/5t/6tqp003x4fn09fzgtx46tjdh0000gn/T/*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Argv[4] looks strange. Indeed if I execute:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 --mca odls_base_verbose 100 java -cp alot:of:jarfile
</span><br>
<span class="quotelev1">&gt; clustering.TensorClusterinCplexMPI
</span><br>
<span class="quotelev1">&gt; The same as before without
</span><br>
<span class="quotelev1">&gt; ( -Djava.library.path=/Users/stamile/Applications/IBM/ILOG/CPLEX_Studio1263/cplex/bin/x86-64_osx )
</span><br>
<span class="quotelev1">&gt; i obtain:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Argv[0]: java*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *  Argv[1]: -Djava.library.path=/usr/local/lib*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *  Argv[2]: -cp*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *  Argv[3]:
</span><br>
<span class="quotelev1">&gt; /Applications/Eclipse.app/Contents/MacOS:/Users/stamile/Documents/workspace_newJava/TensorFactorization/bin:/Users/stamile/Applications/IBM/ILOG/CPLEX_Studio1263/cplex/lib/cplex.jar:/Users/stamile/Downloads/commons-lang3-3.4/commons-lang3-3.4.jar:/Users/stamile/Downloads/Jama-1.0.3.jar:/Users/stamile/Downloads/hyperdrive-master/hyperdrive.jar:/usr/local/lib:/usr/local/lib/mpi.jar*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *  Argv[4]: clustering.TensorClusterinCplexMPI*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *  Env[0]: OMPI_MCA_odls_base_verbose=100*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *  Env[1]: OMPI_COMMAND=clustering.TensorClusterinCplexMPI*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *  Env[2]:
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_orte_precondition_transports=92248561306f2b2e-601ae65dc34a347c*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *  Env[3]: OMPI_MCA_orte_peer_modex_id=0*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *  Env[4]: OMPI_MCA_orte_peer_init_barrier_id=1*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *  Env[5]: OMPI_MCA_orte_peer_fini_barrier_id=2*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *  Env[6]: TMPDIR=/var/folders/5t/6tqp003x4fn09fzgtx46tjdh0000gn/T/*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *  Env[7]: __CF_USER_TEXT_ENCODING=0x1F5:0x0:0x4*
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
<span class="quotelev1">&gt; 2016-05-23 19:38 GMT+02:00 Howard Pritchard &lt;hppritcha_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello Claudio,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun should be combining your java.library.path option with the one
</span><br>
<span class="quotelev2">&gt;&gt; needed to add
</span><br>
<span class="quotelev2">&gt;&gt; the Open MPI's java bindings as well.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Which version of Open MPI are you using?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Could you first try to compile the Ring.java code in ompi/examples and
</span><br>
<span class="quotelev2">&gt;&gt; run it with the
</span><br>
<span class="quotelev2">&gt;&gt; following additional mpirun parameter?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 1 --mca odls_base_verbose 100 java Ring
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; then try your application with the same &quot;odls_base_verbose&quot; mpirun option
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and post the output from the two runs to the mail list?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I suspect there may be a bug with building the combined java.library.path
</span><br>
<span class="quotelev2">&gt;&gt; in the Open MPI code.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Howard
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2016-05-23 9:47 GMT-06:00 Claudio Stamile &lt;claudiostamile_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm using openmpi for Java.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've a problem when I try to use more option parameters in my java
</span><br>
<span class="quotelev3">&gt;&gt;&gt; command. More in detail I run mpirun as follow:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -n 5 java -cp path1:path2 -Djava.library.path=pathLibs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; classification.MyClass
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It seems that the option &quot;-Djava.library.path&quot; is ignored when i execute
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the command.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is it normal ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do you know how to solve this problem ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Claudio
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29285.php">http://www.open-mpi.org/community/lists/users/2016/05/29285.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29288.php">http://www.open-mpi.org/community/lists/users/2016/05/29288.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29292.php">http://www.open-mpi.org/community/lists/users/2016/05/29292.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29293.php">http://www.open-mpi.org/community/lists/users/2016/05/29293.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29294/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29295.php">Megdich Islem: "Re: [OMPI users] users Digest, Vol 3510, Issue 2"</a>
<li><strong>Previous message:</strong> <a href="29293.php">Ralph Castain: "Re: [OMPI users] mpirun java"</a>
<li><strong>In reply to:</strong> <a href="29293.php">Ralph Castain: "Re: [OMPI users] mpirun java"</a>
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
