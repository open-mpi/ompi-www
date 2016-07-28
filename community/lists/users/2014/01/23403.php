<?
$subject_val = "Re: [OMPI users] How to use non-primitive types with Java binding";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 17 18:26:03 2014" -->
<!-- isoreceived="20140117232603" -->
<!-- sent="Fri, 17 Jan 2014 18:26:02 -0500" -->
<!-- isosent="20140117232602" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to use non-primitive types with Java binding" -->
<!-- id="CA+ssbKUM64eu6FmA_m+fCb8NpwSaqHWztz5TnsxsOEnLjt5WkA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20140117232038.32302vjpw3fsw8u8_at_webmail.dsic.upv.es" -->
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
<strong>Date:</strong> 2014-01-17 18:26:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23404.php">Doug Roberts: "[OMPI users] Connection timed out with multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="23402.php">Brock Palen: "Re: [OMPI users] openmpi-1.6.5  intel 14.0 MPI-IO Errors"</a>
<li><strong>In reply to:</strong> <a href="23401.php">Oscar Vega-Gisbert: "Re: [OMPI users] How to use non-primitive types with Java binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23406.php">Siegmar Gross: "Re: [OMPI users] How to use non-primitive types with Java binding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you and this makes sense. In fact we've been trying to avoid
<br>
serialization as much as possible because we found it to be a bottleneck.
<br>
<p>Anyway I wonder if there are some samples illustrating the use of complex
<br>
structures in OpenMPI
<br>
<p>Thank you,
<br>
Saliya
<br>
On Jan 17, 2014 5:20 PM, &quot;Oscar Vega-Gisbert&quot; &lt;ovega_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; MPI.OBJECT is no longer supported because of it was based on
</span><br>
<span class="quotelev1">&gt; serialization, and it made the java bindings more complicated. It brought
</span><br>
<span class="quotelev1">&gt; more problems than benefits. For example, it was necessary a shadow
</span><br>
<span class="quotelev1">&gt; communicator...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can define complex struct data using direct buffers and avoiding
</span><br>
<span class="quotelev1">&gt; serialization. MPI.OBJECT could be implemented in a higher level layer, but
</span><br>
<span class="quotelev1">&gt; serialization is very bad for performance...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Oscar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Quoting Saliya Ekanayake &lt;esaliya_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thank you Oscar. I was using an earlier nightly tarball and in it there
</span><br>
<span class="quotelev2">&gt;&gt; was
</span><br>
<span class="quotelev2">&gt;&gt; MPI.OBJECT datatype, which I could use with any serializable complex
</span><br>
<span class="quotelev2">&gt;&gt; object. It seems this is no longer supported as per your answer or did I
</span><br>
<span class="quotelev2">&gt;&gt; get it wrong?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you,
</span><br>
<span class="quotelev2">&gt;&gt; Saliya
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Jan 16, 2014 at 5:22 PM, Oscar Vega-Gisbert &lt;ovega_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you are talking about types as ArrayList&lt;Double&gt;, it is not possible,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; because the Double (D uppercase) is an object which encapsulates a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; double.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And the elements of an ArrayList are references (pointers) to Java
</span><br>
<span class="quotelev3">&gt;&gt;&gt; objects.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You can use complex types but you must create them with the Datatype
</span><br>
<span class="quotelev3">&gt;&gt;&gt; methods (createVector, createStruct,...). And the buffers that hold the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; data must be arrays of a primitive type or direct buffers.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Oscar
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Quoting Saliya Ekanayake &lt;esaliya_at_[hidden]&gt;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is it possible to use non-primitive types with MPI operations in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OpenMPI's
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Java binding? At the moment in the trunk I only see Datatypes for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; primitive
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; kinds.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thank you,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Saliya
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Saliya Ekanayake esaliya_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This message was sent using IMP, the Internet Messaging Program.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Saliya Ekanayake esaliya_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Cell 812-391-4914 Home 812-961-6383
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://saliya.org">http://saliya.org</a>
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23403/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23404.php">Doug Roberts: "[OMPI users] Connection timed out with multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="23402.php">Brock Palen: "Re: [OMPI users] openmpi-1.6.5  intel 14.0 MPI-IO Errors"</a>
<li><strong>In reply to:</strong> <a href="23401.php">Oscar Vega-Gisbert: "Re: [OMPI users] How to use non-primitive types with Java binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23406.php">Siegmar Gross: "Re: [OMPI users] How to use non-primitive types with Java binding"</a>
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
