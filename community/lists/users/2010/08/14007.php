<?
$subject_val = "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 12 22:53:57 2010" -->
<!-- isoreceived="20100813025357" -->
<!-- sent="Thu, 12 Aug 2010 18:53:51 -0800" -->
<!-- isosent="20100813025351" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI Run-Time &amp;quot;Freedom&amp;quot; Question" -->
<!-- id="AANLkTi=gO5=1McfN=myiHywWta6Dy+AjPpNWLMNj7c9H_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="22EED58B-4796-4065-B19D-891B9548B2DD_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question<br>
<strong>From:</strong> Jed Brown (<em>jed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-12 22:53:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14008.php">sunita_at_[hidden]: "[OMPI users] problem with .bashrc stetting of openmpi"</a>
<li><strong>Previous message:</strong> <a href="14006.php">Gus Correa: "Re: [OMPI users] Abort"</a>
<li><strong>In reply to:</strong> <a href="14000.php">Ralph Castain: "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14018.php">Michael E. Thomadakis: "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
<li><strong>Reply:</strong> <a href="14018.php">Michael E. Thomadakis: "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Or OMPI_CC=icc-xx.y mpicc ...
<br>
<p>Jed
<br>
<p>On Aug 12, 2010 5:18 PM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><p>On Aug 12, 2010, at 7:04 PM, Michael E. Thomadakis wrote:
<br>
<p><span class="quotelev1">&gt; On 08/12/10 18:59, Tim Prince wrote:
</span><br>
<span class="quotelev2">&gt;&gt;...
</span><br>
The &quot;easy&quot; way to accomplish this would be to:
<br>
<p>(a) build OMPI with whatever compiler you decide to use as a &quot;baseline&quot;
<br>
<p>(b) do -not- use the wrapper compiler to build the application. Instead, do
<br>
&quot;mpicc --showme&quot; (or whatever language equivalent you want) to get the
<br>
compile line, substitute your &quot;new&quot; compiler library for the &quot;old&quot; one, and
<br>
then execute the resulting command manually.
<br>
<p>If you then set your LD_LIBRARY_PATH to the &quot;new&quot; libs, it might work - but
<br>
no guarantees. Still, you could try it - and if it worked, you could always
<br>
just explain that this is a case-by-case situation, and so it -could- break
<br>
with other compiler combinations.
<br>
<p>Critical note: the app developers would have to validate the code with every
<br>
combination! Otherwise, correct execution will be a complete crap-shoot -
<br>
just because the app doesn't abnormally terminate does -not- mean it
<br>
generated a correct result!
<br>
<p><p><p><p><span class="quotelev1">&gt; Thanks for the information on this. We indeed use Intel Compiler set
</span><br>
11.1.XXX + OMPI 1.4.1 and ...
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14007/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14008.php">sunita_at_[hidden]: "[OMPI users] problem with .bashrc stetting of openmpi"</a>
<li><strong>Previous message:</strong> <a href="14006.php">Gus Correa: "Re: [OMPI users] Abort"</a>
<li><strong>In reply to:</strong> <a href="14000.php">Ralph Castain: "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14018.php">Michael E. Thomadakis: "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
<li><strong>Reply:</strong> <a href="14018.php">Michael E. Thomadakis: "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
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
