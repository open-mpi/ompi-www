<?
$subject_val = "[OMPI users] problem with MPI datatypes not defined as constants in OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  8 17:49:11 2013" -->
<!-- isoreceived="20130108224911" -->
<!-- sent="Tue, 8 Jan 2013 23:49:07 +0100" -->
<!-- isosent="20130108224907" -->
<!-- name="Crni Gorac" -->
<!-- email="cgorac_at_[hidden]" -->
<!-- subject="[OMPI users] problem with MPI datatypes not defined as constants in OpenMPI" -->
<!-- id="CAO65DGdruu0S1gsba58UPh_mpd7WNScA7uYWX0axp_3qo+GM-Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] problem with MPI datatypes not defined as constants in OpenMPI<br>
<strong>From:</strong> Crni Gorac (<em>cgorac_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-08 17:49:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21091.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem with MPI datatypes not defined as constants in	OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="21089.php">Siegmar Gross: "[OMPI users] some comments on derived datatypes in mpiJava"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21091.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem with MPI datatypes not defined as constants in	OpenMPI"</a>
<li><strong>Reply:</strong> <a href="21091.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem with MPI datatypes not defined as constants in	OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Most MPI implementations (MPICH, Intel MPI) are defining MPI datatypes
<br>
(MPI_INT, MPI_FLOAT etc.) as constants; in OpenMPI, these are practically
<br>
pointers to corresponding internal structures (for example MPI_FLOAT is
<br>
defined as pointer to mpi_float structure, etc.).  In trying to employ some
<br>
C++ templates to automate mapping between C types and MPI datatypes (code
<br>
provided below), I've encountered a problem with this, so I'm wondering -
<br>
is OpenMPI approach in accordance with MPI standard?
<br>
<p>Here is the code I'm trying to use:
<br>
<p>// ----------------------------------------------------------------
<br>
#include &lt;mpi.h&gt;
<br>
<p>#define TYPEMAP_CREATE(NAME) template&lt;typename T&gt; struct NAME ## _typemap;
<br>
#define TYPEMAP_ENTRY(NAME, FROM, DATA, TO) template&lt;&gt; struct NAME ##
<br>
_typemap&lt;FROM&gt; : register_id&lt;FROM, DATA, TO&gt; { };
<br>
<p>template&lt;typename T&gt;
<br>
struct marker_type
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;typedef T type;
<br>
};
<br>
<p>template&lt;class ValueType, ValueType N&gt;
<br>
struct marker_id {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;static ValueType const value = N;
<br>
};
<br>
<p><p>template&lt;typename T, class ValueType, ValueType N&gt;
<br>
struct register_id : marker_id&lt;ValueType, N&gt;, marker_type&lt;T&gt; {
<br>
private:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;friend marker_type&lt;T&gt; marked_id(marker_id&lt;ValueType, N&gt;) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return marker_type&lt;T&gt;();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
};
<br>
<p>TYPEMAP_CREATE(mpi)
<br>
TYPEMAP_ENTRY(mpi, float, MPI_Datatype, MPI_FLOAT);
<br>
// ----------------------------------------------------------------
<br>
<p>When put in a file (say foo.cpp), and compiled (with g++ 4.7.2, through
<br>
plain &quot;g++ -c foo.cpp&quot;), following errors are reported:
<br>
<p>------------------------------------------------------------------
<br>
foo.cpp:27:1: error: &#226;&#128;&#152;ompi_mpi_float&#226;&#128;&#153; cannot appear in a constant-expression
<br>
foo.cpp:27:1: error: &#226;&#128;&#152;&amp;&#226;&#128;&#153; cannot appear in a constant-expression
<br>
foo.cpp:27:1: error: a cast to a type other than an integral or enumeration
<br>
type cannot appear in a constant-expression
<br>
foo.cpp:27:1: error: a cast to a type other than an integral or enumeration
<br>
type cannot appear in a constant-expression
<br>
foo.cpp:27:1: error: template argument 3 is invalid
<br>
------------------------------------------------------------------
<br>
<p>Thanks.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21090/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21091.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem with MPI datatypes not defined as constants in	OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="21089.php">Siegmar Gross: "[OMPI users] some comments on derived datatypes in mpiJava"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21091.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem with MPI datatypes not defined as constants in	OpenMPI"</a>
<li><strong>Reply:</strong> <a href="21091.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem with MPI datatypes not defined as constants in	OpenMPI"</a>
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
