<?
$subject_val = "Re: [OMPI users] How to use non-primitive types with Java binding";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 16 19:09:13 2014" -->
<!-- isoreceived="20140117000913" -->
<!-- sent="Thu, 16 Jan 2014 19:09:12 -0500" -->
<!-- isosent="20140117000912" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to use non-primitive types with Java binding" -->
<!-- id="CA+ssbKVwGkB+X0pq1vyy+0-7nf42pNvePK0H5AKQ+CUF3brA9w_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20140116232226.344729tz2fct6ehw_at_webmail.dsic.upv.es" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to use non-primitive types with Java binding<br>
<strong>From:</strong> Saliya Ekanayake (<em>esaliya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-16 19:09:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23374.php">Pradeep Jha: "Re: [OMPI users] Calling a variable from another processor"</a>
<li><strong>Previous message:</strong> <a href="23372.php">tmishima_at_[hidden]: "[OMPI users] hosfile issue of openmpi-1.7.4rc2"</a>
<li><strong>In reply to:</strong> <a href="23371.php">Oscar Vega-Gisbert: "Re: [OMPI users] How to use non-primitive types with Java binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23401.php">Oscar Vega-Gisbert: "Re: [OMPI users] How to use non-primitive types with Java binding"</a>
<li><strong>Reply:</strong> <a href="23401.php">Oscar Vega-Gisbert: "Re: [OMPI users] How to use non-primitive types with Java binding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you Oscar. I was using an earlier nightly tarball and in it there was
<br>
MPI.OBJECT datatype, which I could use with any serializable complex
<br>
object. It seems this is no longer supported as per your answer or did I
<br>
get it wrong?
<br>
<p>Thank you,
<br>
Saliya
<br>
<p><p>On Thu, Jan 16, 2014 at 5:22 PM, Oscar Vega-Gisbert &lt;ovega_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you are talking about types as ArrayList&lt;Double&gt;, it is not possible,
</span><br>
<span class="quotelev1">&gt; because the Double (D uppercase) is an object which encapsulates a double.
</span><br>
<span class="quotelev1">&gt; And the elements of an ArrayList are references (pointers) to Java objects.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can use complex types but you must create them with the Datatype
</span><br>
<span class="quotelev1">&gt; methods (createVector, createStruct,...). And the buffers that hold the
</span><br>
<span class="quotelev1">&gt; data must be arrays of a primitive type or direct buffers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Oscar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Quoting Saliya Ekanayake &lt;esaliya_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is it possible to use non-primitive types with MPI operations in OpenMPI's
</span><br>
<span class="quotelev2">&gt;&gt; Java binding? At the moment in the trunk I only see Datatypes for
</span><br>
<span class="quotelev2">&gt;&gt; primitive
</span><br>
<span class="quotelev2">&gt;&gt; kinds.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you,
</span><br>
<span class="quotelev2">&gt;&gt; Saliya
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Saliya Ekanayake esaliya_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; This message was sent using IMP, the Internet Messaging Program.
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Saliya Ekanayake esaliya_at_[hidden]
Cell 812-391-4914 Home 812-961-6383
<a href="http://saliya.org">http://saliya.org</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23373/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23374.php">Pradeep Jha: "Re: [OMPI users] Calling a variable from another processor"</a>
<li><strong>Previous message:</strong> <a href="23372.php">tmishima_at_[hidden]: "[OMPI users] hosfile issue of openmpi-1.7.4rc2"</a>
<li><strong>In reply to:</strong> <a href="23371.php">Oscar Vega-Gisbert: "Re: [OMPI users] How to use non-primitive types with Java binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23401.php">Oscar Vega-Gisbert: "Re: [OMPI users] How to use non-primitive types with Java binding"</a>
<li><strong>Reply:</strong> <a href="23401.php">Oscar Vega-Gisbert: "Re: [OMPI users] How to use non-primitive types with Java binding"</a>
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
