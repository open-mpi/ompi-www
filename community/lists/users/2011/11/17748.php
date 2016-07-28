<?
$subject_val = "Re: [OMPI users] wiki and &quot;man mpirun&quot; odds, and a question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 10 10:09:53 2011" -->
<!-- isoreceived="20111110150953" -->
<!-- sent="Thu, 10 Nov 2011 10:09:48 -0500" -->
<!-- isosent="20111110150948" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] wiki and &amp;quot;man mpirun&amp;quot; odds, and a question" -->
<!-- id="4EBBE93C.4010108_at_ias.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F37465C4-DAE4-4231-AE2F-98B2803DE8DF_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] wiki and &quot;man mpirun&quot; odds, and a question<br>
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-10 10:09:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17749.php">Mudassar Majeed: "Re: [OMPI users] Process Migration"</a>
<li><strong>Previous message:</strong> <a href="17747.php">Josh Hursey: "Re: [OMPI users] Process Migration"</a>
<li><strong>In reply to:</strong> <a href="17742.php">Ralph Castain: "Re: [OMPI users] wiki and &quot;man mpirun&quot; odds, and a question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17746.php">Jeff Squyres: "Re: [OMPI users] wiki and &quot;man mpirun&quot; odds, and a question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul,
<br>
<p>I'm sure this isn't the response you want to hear, but I'll suggest it
<br>
anyway:
<br>
<p>Queuing systems can forward the submitters environment if desired. For
<br>
example, in SGE, the -V switch forwards all the environment variables to
<br>
the job's environment, so if there's one you can use to launch your job,
<br>
you might want to check it's documentation.
<br>
<p><pre>
--
Prentice 
On 11/10/2011 08:01 AM, Ralph Castain wrote:
&gt; I'm not sure where the FAQ got its information, but it has always been one param per -x option.
&gt;
&gt; I'm afraid there isn't any envar to support the setting of multiple -x options. We didn't expect someone to forward very many, if any, so we didn't create that capability. It wouldn't be too hard to convert it to an mca param, though, so you could add such options to your mca param file, if that would help.
&gt;
&gt;
&gt; On Nov 10, 2011, at 4:02 AM, Paul Kapinos wrote:
&gt;
&gt;&gt; Hi folks,
&gt;&gt; I.  looked for ways to tell to &quot;mpiexec&quot; to forward some environment variables, I saw a mismatch:
&gt;&gt;
&gt;&gt; -------------------------------------------------------------------
&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=running#mpirun-options">http://www.open-mpi.org/faq/?category=running#mpirun-options</a>
&gt;&gt; ...
&gt;&gt; --x &lt;env-variable-names&gt;: A comma-delimited list of environment variables to export to the parallel application.
&gt;&gt; -------------------------------------------------------------------
&gt;&gt; (Open MPI/1.5.3)
&gt;&gt; $ man mpirun
&gt;&gt;       -x &lt;env&gt;
&gt;&gt;              Export  the  specified environment variables to the remote nodes before executing the program.  Only one environment variable can
&gt;&gt;                                    ^^^^^^^^^^^
&gt;&gt; be  specified per -x option.
&gt;&gt; -------------------------------------------------------------------
&gt;&gt;
&gt;&gt; So, either the info is outdated somewhre, or -x and --x have different meaning - but then there is a lack of info, too :o)
&gt;&gt;
&gt;&gt; Maybe you could update the Wiki and/or the man page?
&gt;&gt;
&gt;&gt; II. Now the question. Defaultly no non-OpenMPI environmet variables are exported to the parallel application, AFAIK.
&gt;&gt;
&gt;&gt; With -x option of mpiexec it is possible to export one (or a list of, see below) environment variable. But, it's a bit tedious to type a [long] list of variables.
&gt;&gt;
&gt;&gt; Is there someone envvar, by setting which to a list of names of other envvars the same effect could be achieved as by setting -x on command line of mpirun?
&gt;&gt;
&gt;&gt; Best wishes
&gt;&gt; Paul Kapinos
&gt;&gt;
&gt;&gt;
&gt;&gt; -- 
&gt;&gt; Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
&gt;&gt; RWTH Aachen University, Center for Computing and Communication
&gt;&gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
&gt;&gt; Tel: +49 241/80-24915
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17749.php">Mudassar Majeed: "Re: [OMPI users] Process Migration"</a>
<li><strong>Previous message:</strong> <a href="17747.php">Josh Hursey: "Re: [OMPI users] Process Migration"</a>
<li><strong>In reply to:</strong> <a href="17742.php">Ralph Castain: "Re: [OMPI users] wiki and &quot;man mpirun&quot; odds, and a question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17746.php">Jeff Squyres: "Re: [OMPI users] wiki and &quot;man mpirun&quot; odds, and a question"</a>
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
