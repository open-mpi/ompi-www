<?
$subject_val = "[OMPI devel] some comments on attribute catching, create/free() keyvals and all 	that.";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 13 14:10:12 2009" -->
<!-- isoreceived="20090313181012" -->
<!-- sent="Fri, 13 Mar 2009 16:10:07 -0200" -->
<!-- isosent="20090313181007" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="[OMPI devel] some comments on attribute catching, create/free() keyvals and all 	that." -->
<!-- id="e7ba66e40903131110x6eabc890gea65602fa5fa5612_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="e7ba66e40903131101i43a941efk84b48d71ff81bc5a_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] some comments on attribute catching, create/free() keyvals and all 	that.<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-13 14:10:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5643.php">Brian Barrett: "Re: [OMPI devel] 1.3.1 blocker"</a>
<li><strong>Previous message:</strong> <a href="5641.php">Ralph Castain: "Re: [OMPI devel] 1.3.1 blocker"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've posted this to MPICH2-Dev, and then decided to re-post this here,
<br>
at the behavior of Open MPI is exactly the same.
<br>
<p>You may also want to try the code right below, and next the one at the
<br>
end of the forwarder message.
<br>
<p>#include &lt;mpi.h&gt;
<br>
#include &lt;stdio.h&gt;
<br>
int main( int argc, char ** argv ) {
<br>
&nbsp;&nbsp;int Key1, tmp1, Key2, tmp2;
<br>
&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
<p>&nbsp;&nbsp;MPI_Keyval_create(MPI_NULL_COPY_FN, MPI_NULL_DELETE_FN, &amp;Key1,(void *) 0);
<br>
&nbsp;&nbsp;tmp1=Key1;
<br>
&nbsp;&nbsp;MPI_Keyval_free(&amp;tmp1);
<br>
<p>&nbsp;&nbsp;MPI_Keyval_create(MPI_NULL_COPY_FN, MPI_NULL_DELETE_FN, &amp;Key2, (void *) 0);
<br>
&nbsp;&nbsp;tmp2=Key2;
<br>
&nbsp;&nbsp;MPI_Keyval_free(&amp;tmp2);
<br>
<p>&nbsp;&nbsp;MPI_Finalize();
<br>
<p>&nbsp;&nbsp;printf(&quot;MPI_KEYVAL_INVALID: %d\n&quot;, MPI_KEYVAL_INVALID);
<br>
<p>&nbsp;&nbsp;printf(&quot;Key1: %d\n&quot;, Key1);
<br>
&nbsp;&nbsp;printf(&quot;tmp1: %d\n&quot;, tmp1);
<br>
<p>&nbsp;&nbsp;printf(&quot;Key2: %d\n&quot;, Key2);
<br>
&nbsp;&nbsp;printf(&quot;tmp2: %d\n&quot;, tmp2);
<br>
<p>&nbsp;&nbsp;return 0;
<br>
}
<br>
<p><p>---------- Forwarded message ----------
<br>
From: Lisandro Dalcin &lt;dalcinl_at_[hidden]&gt;
<br>
Date: Fri, Mar 13, 2009 at 4:01 PM
<br>
Subject: some comments on attribute catching, create/free() keyvals
<br>
and all  that.
<br>
To: mpich2-dev_at_[hidden]
<br>
<p><p>As I've shown in a previous emal, MPICH2 likely implement
<br>
create()/free() for keyvals using a counter that is incr/decr ...
<br>
<p>Now, give a try to the code pasted below. This shows that (at least in
<br>
MPICH2), MPI_Keyval_free() have to be used with great care as it is
<br>
IMHO dangerous, and basically these calls should be all done near
<br>
MPI_Finalize() time... or bad things could happen...
<br>
<p>The only reference I can found in the MPI standard is at
<br>
(<a href="http://www.mpi-forum.org/docs/mpi21-report-bw/node147.htm#Node147">http://www.mpi-forum.org/docs/mpi21-report-bw/node147.htm#Node147</a>)
<br>
where MPI_Comm_free_keyval() is explained... However, I believe that
<br>
description is talking about different things...
<br>
<p>Should MPICH2 stop decrefing the keyval counter? You know, about 2&lt;&lt;31
<br>
values should be enough, right ;-) ?
<br>
But then.. What the pourpose of having MPI_Keyval_free()? Just to
<br>
invalidate de passed value by setting it to KEYVAL_INVALID?
<br>
<p><p>#include &lt;mpi.h&gt;
<br>
#include &lt;stdio.h&gt;
<br>
<p>int free_KeyVal(MPI_Comm c, int k, void *v,void *ctx)
<br>
{
<br>
&#160;printf(&quot;free_KeyVal()\n&quot;);
<br>
&#160;return MPI_SUCCESS;
<br>
}
<br>
<p>int main( int argc, char ** argv ) {
<br>
&#160;int Key1, Key2, Val1=1, Val2=2, ValOut;
<br>
&#160;MPI_Init(&amp;argc, &amp;argv);
<br>
<p>&#160;MPI_Keyval_create(MPI_NULL_COPY_FN, free_KeyVal, &amp;Key1,(void *) 0);
<br>
&#160;MPI_Attr_put(MPI_COMM_SELF, Key1, &amp;Val1);
<br>
&#160;MPI_Keyval_free(&amp;Key1);
<br>
<p>&#160;MPI_Keyval_create(MPI_NULL_COPY_FN, MPI_NULL_DELETE_FN, &amp;Key2,(void *) 0);
<br>
&#160;MPI_Attr_put(MPI_COMM_SELF, Key2, &amp;Val2);
<br>
&#160;MPI_Keyval_free(&amp;Key2);
<br>
<p>&#160;MPI_Finalize();
<br>
<p>&#160;return 0;
<br>
}
<br>
<p><p><pre>
--
Lisandro Dalc&#237;n
---------------
Centro Internacional de M&#233;todos Computacionales en Ingenier&#237;a (CIMEC)
Instituto de Desarrollo Tecnol&#243;gico para la Industria Qu&#237;mica (INTEC)
Consejo Nacional de Investigaciones Cient&#237;ficas y T&#233;cnicas (CONICET)
PTLC - G&#252;emes 3450, (3000) Santa Fe, Argentina
Tel/Fax: +54-(0)342-451.1594
-- 
Lisandro Dalc&#237;n
---------------
Centro Internacional de M&#233;todos Computacionales en Ingenier&#237;a (CIMEC)
Instituto de Desarrollo Tecnol&#243;gico para la Industria Qu&#237;mica (INTEC)
Consejo Nacional de Investigaciones Cient&#237;ficas y T&#233;cnicas (CONICET)
PTLC - G&#252;emes 3450, (3000) Santa Fe, Argentina
Tel/Fax: +54-(0)342-451.1594
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5643.php">Brian Barrett: "Re: [OMPI devel] 1.3.1 blocker"</a>
<li><strong>Previous message:</strong> <a href="5641.php">Ralph Castain: "Re: [OMPI devel] 1.3.1 blocker"</a>
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
